<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCardioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_cardio', function(Blueprint $table)
		{
			$table->increments('id');	
			$table->integer('user_id');
			
			$table->integer('cardioThisWeek');
			$table->integer('cardioThisMonth');
			$table->integer('cardioThisYear');
			$table->integer('cardioMostMiles');
			$table->integer('cardioTotalCalories');
			

			
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_cardio');
	}

}
