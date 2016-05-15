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

Route::get('home', array('uses' => 'HomeController@index', 'as' => 'home'));

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('page', function() {
	return "Hello";
});

/*Route::get('map', array('uses' => 'HomeController@showMapForm', 'as' => 'map'));
Route::get('building', array('uses' => 'HomeController@showBuildingForm', 'as' => 'building'));
Route::get('floor', array('uses' => 'HomeController@showFloorForm', 'as' => 'floor'));
Route::get('position', array('uses' => 'HomeController@showPositionForm', 'as' => 'position'));
Route::get('route', array('uses' => 'HomeController@showRouteForm', 'as' => 'route'));*/

Route::get('map/{id}', 'HomeController@showMap');
Route::get('step', array('uses' => 'HomeController@showStepForm', 'as' => 'step'));
//Route::get('node/{id}', 'HomeController@showMap');

Route::post('map/add', 'HomeController@storeMap');
Route::post('node/add', 'HomeController@storeNode');
Route::post('step/add', 'HomeController@storeStep');

Route::get('map/edit/{id}', 'HomeController@editMap');
Route::get('node/edit/{id}', 'HomeController@editNode');
Route::get('step/edit/{id}', 'HomeController@editStep');

Route::patch('changemap/{id}', 'HomeController@updateMap');

Route::delete('deletemap/{id}', 'HomeController@deleteMap');
///////////////////////////////

Route::get('maps', 'MapsController@index');
Route::get('maps/{map}', 'MapsController@show');
Route::post('maps', 'MapsController@store');
Route::get('maps/{map}/edit', 'MapsController@edit');
Route::patch('maps/{map}', 'MapsController@update');
Route::delete('mapss/{map}', 'MapsController@destroy');

Route::post('nodes', 'NodesController@store');

Route::post('steps', 'StepsController@store');

//route model binding so I can type hint
//Route::bind('map', function($value, $route) { return App\Map::find($value); });
////////////////////////////////////////



Route::get('database', ['middleware' => 'cors', 'uses' => 'DBController@display']);
	/*, function() {
		return '{"results":[{"gender":"male","name":{"title":"mr","first":"liam","last":"green"},"location":{"street":"5638 old taupo road","city":"dunedin","state":"gisborne","postcode":96137},"email":"liam.green@example.com","login":{"username":"greensnake502","password":"auto","salt":"EnJmhQTC","md5":"32cfec175c34b5418a80e38e5b616cfa","sha1":"49dbcacce47d4d55a6ee8c264c440b31e0775ab8","sha256":"a5591b5a04b5366643a751a29d7cae2ad07c704fadbc4cad1b9f4b2d7d2cd8ea"},"registered":1377080910,"dob":711178612,"phone":"(532)-659-0677","cell":"(639)-511-5260","id":{"name":"","value":null},"picture":{"large":"https://randomuser.me/api/portraits/men/42.jpg","medium":"https://randomuser.me/api/portraits/med/men/42.jpg","thumbnail":"https://randomuser.me/api/portraits/thumb/men/42.jpg"},"nat":"NZ"}],"info":{"seed":"9644771043cc985f","results":1,"page":1,"version":"1.0"}}';
	}]);*/
/*, function() {
	$results = DB::select('select * from users');
	//DB::select('select * from users', array(10));

	if(DB::connection()->getDatabaseName())
{
   echo "Yes! successfully connected to the DB: " . DB::connection()->getDatabaseName();
}
	    return var_dump($results);
});*/