<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStepsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('steps', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('map_id')->unsigned()->index();
			$table->integer('start_node')->unsigned();
			$table->integer('end_node')->unsigned();
			$table->integer('path_cost')->unsigned();
			$table->integer('order')->unsigned();
			$table->string('image');
			$table->string('description');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('steps');
	}

}
