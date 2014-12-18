<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserStatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
public function up()
	{
		Schema::create('user_stats', function(Blueprint $table)
		{
			$table->increments('id');	
			$table->integer('user_id');
			$table->string('height', 32); // height in inches
			$table->string('weight', 32); // weight in pounds
			$table->string('activity', 32); // TDEE activity level
			$table->date('age', 320);
			$table->string('sex', 64);
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_stats');
	}

}
