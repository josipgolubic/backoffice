<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Node extends Model {

	public function map()
	{
		return $this->belongsTo(Map::class);
	}

}
