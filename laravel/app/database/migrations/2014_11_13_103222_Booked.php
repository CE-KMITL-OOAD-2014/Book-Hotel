<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Booked extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Bookeds', function($table)
		{
			$table->increments('id');
			$table->integer('userid');
			$table->integer('roomid');
			$table->string('start');
			$table->string('end');
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
		Schema::drop('Bookeds');
	}

}
