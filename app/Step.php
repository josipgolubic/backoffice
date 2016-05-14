<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Step extends Model {

	public function map()
	{
		return $this->belongsTo('App\Map');
	}

}
