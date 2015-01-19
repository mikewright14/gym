<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('food', function(Blueprint $table)
		{
			$table->increments('id');	
			$table->integer('user_id');
			
			$table->string('Name');
			$table->string('Brand');
			$table->integer('Protein');
			$table->integer('Carbs');
			$table->integer('Fats');
			$table->integer('Calories');
			
			

			
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('food');
	}

}