<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;

class DBController extends Controller {

	public function display()
	{
		$table_xml_info = json_encode(DB::table('TABLE_XML_INFO')->get());
		$table_node = json_encode(DB::table('TABLE_NODE')->get());
		$table_step = json_encode(DB::table('TABLE_STEP')->get());

		return '"table_xml_info": ' . $table_xml_info . "," . '"table_node": ' . $table_node . "," . '"table_step": ' . $table_step;
		/*if(DB::connection()->getDatabaseName())
		{
			echo "Yes! successfully connected to the DB: " . DB::connection()->getDatabaseName();
		}*/
		
		/*return '{"results":[{"gender":"male","name":{"title":"mr","first":"liam","last":"green"},"location":{"street":"5638 old taupo road","city":"dunedin","state":"gisborne","postcode":96137},"email":"liam.green@example.com","login":{"username":"greensnake502","password":"auto","salt":"EnJmhQTC","md5":"32cfec175c34b5418a80e38e5b616cfa","sha1":"49dbcacce47d4d55a6ee8c264c440b31e0775ab8","sha256":"a5591b5a04b5366643a751a29d7cae2ad07c704fadbc4cad1b9f4b2d7d2cd8ea"},"registered":1377080910,"dob":711178612,"phone":"(532)-659-0677","cell":"(639)-511-5260","id":{"name":"","value":null},"picture":{"large":"https://randomuser.me/api/portraits/men/42.jpg","medium":"https://randomuser.me/api/portraits/med/men/42.jpg","thumbnail":"https://randomuser.me/api/portraits/thumb/men/42.jpg"},"nat":"NZ"}],"info":{"seed":"9644771043cc985f","results":1,"page":1,"version":"1.0"}}';*/
		//return $users;
	    //return view('database', compact('users'));
	}

}
