<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('page', function() {
	return "Hello";
});

Route::get('database', 'DBController@select_users');
/*, function() {
	$results = DB::select('select * from users');
	//DB::select('select * from users', array(10));

	if(DB::connection()->getDatabaseName())
{
   echo "Yes! successfully connected to the DB: " . DB::connection()->getDatabaseName();
}
	    return var_dump($results);
});*/