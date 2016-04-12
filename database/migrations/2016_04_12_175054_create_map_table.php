<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMapTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TABLE_XML_INFO', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('KEY_MAP_VERSION');
			$table->string('KEY_MAP_DESCRIPTION');
			$table->string('KEY_XML_HASH');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('TABLE_XML_INFO');
	}

}
