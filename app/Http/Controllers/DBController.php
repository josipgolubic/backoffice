<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;
use App\Map;
use App\Node;
use App\Step;

class DBController extends Controller {

	public function display()
	{
		$maps = Map::all();//json_encode(DB::table('maps')->get());
		$nodes = Node::all();//json_encode(DB::table('nodes')->get());
		$steps = Step::all();//json_encode(DB::table('steps')->get());

		$data = '{"maps": ' . $maps . "," . '"nodes": ' . $nodes . "," . '"steps": ' . $steps . '}';

	    return $data;//view('database', compact('data'));
	}

}
