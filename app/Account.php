<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model {

	public function maps()
	{
		return $this->hasMany('App\Map');
	}

}
