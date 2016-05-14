<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Map extends Model {

	public function nodes()
	{
		return $this->hasMany(Node::class);
	}

	public function steps()
	{
		return $this->hasMany(Step::class);
	}

}
