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

	public function show($id)	
	{
		//map->KEY_MAP_DESCRIPTION;
		$map = DB::table('TABLE_XML_INFO')->where('id', $id)->first();
		return view('show.map', compact('map'));
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
/*
		<!--
			$table->increments('id');
			$table->integer('KEY_NODE_ID')->unique();
			$table->integer('KEY_XML_INFO_ID'); 1
			$table->string('KEY_BUILDING_DESCRIPTION');
			$table->integer('KEY_FLOOR_LEVEL');
			$table->string('KEY_FLOOR_DESCRIPTION');
			$table->integer('KEY_FLOOR_LENGTH');
			$table->integer('KEY_FLOOR_WIDTH');
			$table->string('KEY_NODE_DESCRIPTION');
			$table->integer('KEY_NODE_X_POSITION');
			$table->integer('KEY_NODE_Y_POSTIION');
			$table->string('KEY_NODE_TYPE');
-->
*/
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
}
