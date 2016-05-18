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

Route::get('database', ['middleware' => 'cors', 'uses' => 'DBController@display']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::group(['middleware' => ['web']], function () {
    Route::post('maps', 'MapsController@store');
});


Route::get('maps', 'MapsController@index');
Route::get('maps/{map}', 'MapsController@show');
//Route::post('maps', 'MapsController@store');
Route::get('maps/{map}/edit', 'MapsController@edit');
Route::patch('maps/{map}', 'MapsController@update');
Route::delete('maps/{map}', 'MapsController@destroy');

Route::get('nodes/{node}', 'NodesController@show');
Route::post('nodes', 'NodesController@store');
Route::get('nodes/{node}/edit', 'NodesController@edit');
Route::patch('nodes/{node}', 'NodesController@update');
Route::delete('nodes/{node}', 'NodesController@destroy');

Route::post('steps', 'StepsController@store');

//route model binding so I can type hint
//Route::bind('map', function($value, $route) { return App\Map::find($value); });
////////////////////////////////////////