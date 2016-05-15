<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Step extends Model {

	protected $guarded = ['id', 'map_id'];

	public $timestamps = false;

	public function map()
	{
		return $this->belongsTo('App\Map');
	}

}
