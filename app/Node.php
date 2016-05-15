<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Node extends Model {

	protected $guarded = ['id', 'map_id'];
	protected $timestamps = false;

	public function map()
	{
		return $this->belongsTo('App\Map');
	}

}
