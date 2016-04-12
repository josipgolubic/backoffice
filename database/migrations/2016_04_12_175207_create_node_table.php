<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNodeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TABLE_NODE', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('KEY_NODE_ID')->unique();
			$table->integer('KEY_XML_INFO_ID');
			$table->string('KEY_BUILDING_DESCRIPTION');
			$table->integer('KEY_FLOOR_LEVEL');
			$table->string('KEY_FLOOR_DESCRIPTION');
			$table->integer('KEY_FLOOR_LENGTH');
			$table->integer('KEY_FLOOR_WIDTH');
			$table->string('KEY_NODE_DESCRIPTION');
			$table->integer('KEY_NODE_X_POSITION');
			$table->integer('KEY_NODE_Y_POSTIION');
			$table->string('KEY_NODE_TYPE');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('TABLE_NODE');
	}

}
