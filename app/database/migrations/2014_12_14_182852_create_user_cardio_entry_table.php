<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCardioEntryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_cardio_entry', function(Blueprint $table)
		{
			$table->increments('id');	
			$table->integer('user_id');
			
			$table->string('cardioType');
			$table->integer('cardioDuration');
			$table->integer('cardioLength');
			$table->integer('cardioCaloriesBurnt');
			$table->date('cardioDate');
			
			

			
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_cardio_entry');
	}

}