<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Map extends Model {

	protected $guarded = ['id', 'hash', 'created_at', 'updated_at'];

	public function nodes()
	{
		return $this->hasMany('App\Node');
	}

	public function steps()
	{
		return $this->hasMany('App\Step');
	}


	public function user()
	{
		return $this->belongsTo('App\User');
	}

	protected static function boot() {
        parent::boot();

        static::deleting(function($map) {
             $map->nodes()->delete();
             $map->steps()->delete();
        });
    }
}