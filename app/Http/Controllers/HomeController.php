<?php namespace App\Http\Controllers;

use DB;

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
}
