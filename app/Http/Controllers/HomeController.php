<?php namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$maps = DB::table('TABLE_XML_INFO')->get();
		return view('home', compact('maps'));
	}

	public function showMapForm()
	{
		return view('forms.map');
	}

	public function showBuildingForm()
	{
		return view('forms.building');
	}

	public function showFloorForm()
	{
		return view('forms.floor');
	}

	public function showPositionForm()
	{
		return view('forms.position');
	}

	public function showRouteForm()
	{
		return view('forms.route');
	}

	public function showMap($id)	
	{
		//map->KEY_MAP_DESCRIPTION;
		$singleMap = DB::table('TABLE_XML_INFO')->where('id', $id)->first();
		$maps = DB::table('TABLE_XML_INFO')->get();
		return view('show.map', compact('singleMap', 'maps'));
	}

	public function storeMap(Request $request)
	{
		$id = DB::table('TABLE_XML_INFO')->insertGetId(
    		['KEY_MAP_VERSION' => $request->MapVersion, 
    		 'KEY_MAP_DESCRIPTION' => $request->MapDescription,
    		 'KEY_XML_HASH' => $request->_token]
		);

		return redirect('home');

	//	return $request->all();
	}

	public function storeNode(Request $request)
	{
		$id = DB::table('TABLE_NODE')->insertGetId(
    		['KEY_NODE_ID' => $request->NodeID, 
    		 'KEY_XML_INFO_ID' => 1,
    		 'KEY_BUILDING_DESCRIPTION' => $request->BuildingDescription,
    		 'KEY_FLOOR_LEVEL' => $request->FloorLevel,
    		 'KEY_FLOOR_DESCRIPTION' => $request->FloorDescription,
    		 'KEY_FLOOR_LENGTH' => $request->FloorLength,
    		 'KEY_FLOOR_WIDTH' => $request->FloorWidth,
    		 'KEY_NODE_DESCRIPTION' => $request->NodeDescription,
    		 'KEY_NODE_X_POSITION' => $request->NodeX,
    		 'KEY_NODE_Y_POSTIION' => $request->NodeY,
    		 'KEY_NODE_TYPE' => $request->NodeType]
		);

		return redirect('home');
	}

	public function showStepForm($id)	
	{
		$steps = DB::table('TABLE_STEP')->get();
		$nodes = DB::table('TABLE_NODE')->get();
		return view('show.step', compact('steps', 'nodes'));
	}

	public function storeStep(Request $request)
	{
		/*
			$table->increments('id');
			$table->integer('KEY_NODE_ID');
			$table->integer('KEY_NEIGHBOUR_ID');
			$table->integer('KEY_PATH_COST');
			$table->integer('KEY_STEP_ORDER');
			$table->string('KEY_STEP_IMAGE');
			$table->string('KEY_STEP_DESCRIPTION');
		*/
		$id = DB::table('TABLE_STEP')->insertGetId(
    		['KEY_NODE_ID' => $request->StartNode, 
    		 'KEY_NEIGHBOUR_ID' => $request->EndNode,
    		 'KEY_PATH_COST' => $request->PathCost,
    		 'KEY_STEP_ORDER' => $request->StepOrder,
    		 'KEY_STEP_IMAGE' => $request->StepImage,
    		 'KEY_STEP_DESCRIPTION' => $request->StepDescription,]
		);

		return redirect('home');
	}
}
