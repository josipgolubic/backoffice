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
			$table->string('description');
			$table->integer('xPos');
			$table->integer('yPos');
			$table->string('type');
			$table->string('buildingDescription');
			$table->integer('floorLevel');
			$table->string('floorDescription');
			$table->integer('floorLength');
			$table->integer('floorWidth');
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
