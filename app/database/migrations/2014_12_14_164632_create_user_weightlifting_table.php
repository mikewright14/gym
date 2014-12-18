<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserWeightliftingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_weightlifting', function(Blueprint $table)
		{
			$table->increments('id');	
			$table->integer('user_id');
			
			$table->integer('maxBenchPressWeight');
			$table->integer('repBenchPressWeight');
			$table->integer('repBenchPressReps');

			$table->integer('maxSquatWeight');
			$table->integer('repSquatWeight');
			$table->integer('repSquatReps');


			$table->integer('maxDeadliftWeight');
			$table->integer('repDeadliftWeight');
			$table->integer('repDeadliftReps');


			$table->integer('maxOverheadPressWeight');
			$table->integer('repOverheadPressWeight');
			$table->integer('repOverheadPressReps');


			
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_weightlifting');
	}

}
