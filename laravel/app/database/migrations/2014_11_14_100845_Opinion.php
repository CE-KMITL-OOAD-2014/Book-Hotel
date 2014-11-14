<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Opinion extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Opinions', function($table)
		{
			$table->increments('id');
			$table->integer('userid');
			$table->integer('hotelid');
			$table->integer('star');
			$table->text('comment');
			$table->string('time');
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
		Schema::drop('Opinions');
	}

}
