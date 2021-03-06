<?php namespace App\Http\Controllers;

use Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Map;

class MapsController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Maps Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the overview of existing maps for users logged
	| in and provides a form to add new maps.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//$maps = Map::all(); 
		$maps = Map::where('user_id', '=', Auth::user()->id)->get();
		return view('maps.index', compact('maps'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$map = new Map;

		$this->validate($request, [
			'description' => 'required',
			'version' => 'required'
		]);

		$map->user_id = Auth::user()->id;
		$map->description = $request->description;
		$map->version = $request->version;
		$map->hash = $request->_token;

		$map->save();
		//$map->save($request->all());

		return back();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//show(Map $map) for RMB
		//$map = Map::with('nodes')->find($id);
		$map = Map::find($id);

		return view('maps.show', compact('map'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$map = Map::find($id);

		return view('maps.edit', compact('map'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$map = Map::find($id);

		$map->update($request->all());

		return redirect('/maps/'.$id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$map = Map::find($id);

		$map->nodes()->delete();
		$map->steps()->delete();

		$map->delete();

		return redirect('/maps');
	}

}
