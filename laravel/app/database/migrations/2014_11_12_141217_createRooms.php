<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRooms extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Rooms', function($table)
		{
			$table->increments('id');
			$table->string('path');
			$table->integer('price');
			$table->boolean('roomStatus');
			$table->string('date');
			$table->string('hotelid');
 
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Rooms');
	}

}
