<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {



	public function testDatabase()
	{
	    // Make call to application...

	    $results = DB::select('select * from users', array(10));
	    return "Hello2";
	    //view('welcome', compact('results'));
	}

}

