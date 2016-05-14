<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNodesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nodes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('map_id')->unsigned()->index();
			$table->string('description');
			$table->integer('x_pos');
			$table->integer('y_pos');
			$table->string('type');
			$table->string('building_description');
			$table->integer('floor_level');
			$table->string('floor_description');
			$table->integer('floor_length');
			$table->integer('floor_width');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('nodes');
	}

}
