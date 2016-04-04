<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;

class DBController extends Controller {

	public function select_users()
	{
		//echo "Variable: " . App::environment() . " ";
		echo "Is local: " App::isLocal() . " ";
		echo "Set to testing: " App::runningUnitTests() . " ";
		$users = DB::table('users')->get();
		if(DB::connection()->getDatabaseName())
		{
			echo "Yes! successfully connected to the DB: " . DB::connection()->getDatabaseName();
		}
	    return view('database', compact('users'));
	}

}
