<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStepTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TABLE_STEP', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('KEY_NODE_ID');
			$table->integer('KEY_NEIGHBOUR_ID');
			$table->integer('KEY_PATH_COST');
			$table->integer('KEY_STEP_ORDER');
			$table->string('KEY_STEP_IMAGE');
			$table->string('KEY_STEP_DESCRIPTION');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('TABLE_STEP');
	}

}
