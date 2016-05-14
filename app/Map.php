<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Map extends Model {

	public function nodes()
	{
		return $this->hasMany('App\Node');
	}

	public function steps()
	{
		return $this->hasMany('App\Step');
	}

}
