<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserNutritionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_nutrition', function(Blueprint $table)
		{
			$table->increments('id');	
			$table->integer('user_id');
			$table->string('calories', 32); // height in inches
			$table->string('protein', 32); // weight in pounds
			$table->string('carbs', 32); // TDEE activity level
			$table->date('fats', 320);
			
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_nutrition');
	}

}
