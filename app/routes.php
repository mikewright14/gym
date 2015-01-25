<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

	
	// route to show the registration form
	Route::get('register', array('uses' => 'UserController@showRegister'));

	// route to show the login form
	Route::get('login', array('uses' => 'HomeController@showLogin'));

	// route to process the form
	Route::post('login', array('uses' => 'HomeController@doLogin'));

	Route::get('/', 'HomeController@index')->before('auth');




	// app/routes.php

	Route::get('logout', array('uses' => 'HomeController@doLogout'));

	
	//---RESOURCES---//
	
	
	Route::group(array('before' => 'auth'), function()
{
	
// User Routes // 
	Route::get('user/create/', array('as' => 'User', 'uses' => 'UserController@create'));
	Route::get('user/success/', array('as' => 'User', 'uses' => 'UserController@success'));
	Route::post('user/create/', array('as' => 'User', 'uses' => 'UserController@store'));


	// User Stats //
	Route::get('user/stats/', array('as' => 'UserStat', 'uses' => 'UserStatController@index'));
	Route::get('user/stats/create', array('as' => 'UserStat', 'uses' => 'UserStatController@create'));
	Route::post('user/stats/create', array('as' => 'UserStat', 'uses' => 'UserStatController@store'));
	Route::get('user/stats/edit', array('as' => 'UserStat', 'uses' => 'UserStatController@edit'));
	Route::put('user/stats/edit', array('as' => 'UserStat', 'uses' => 'UserStatController@update'));

		// User Cardio //
	//Route::get('user/cardio/', array('as' => 'UserCardio', 'uses' => 'UserCardioController@index'));
	Route::get('user/cardio/create', array('as' => 'UserCardio', 'uses' => 'UserCardioController@create'));
	Route::post('user/cardio/create', array('as' => 'UserCardio', 'uses' => 'UserCardioController@store'));
	Route::get('user/cardio/edit', array('as' => 'UserCardio', 'uses' => 'UserCardioController@edit'));
	Route::put('user/cardio/edit', array('as' => 'UserCardio', 'uses' => 'UserCardioController@update'));


			// User Weightlifting //
	//Route::get('user/cardio/', array('as' => 'UserCardio', 'uses' => 'UserCardioController@index'));
	Route::get('user/weightlifting/create', array('as' => 'UserWeightlifting', 'uses' => 'UserWeightliftingController@create'));
	Route::post('user/weightlifting/create', array('as' => 'UserWeightlifting', 'uses' => 'UserWeightliftingController@store'));
	Route::get('user/weightlifting/edit', array('as' => 'UserWeightlifting', 'uses' => 'UserWeightliftingController@edit'));
	Route::put('user/weightlifting/edit', array('as' => 'UserWeightlifting', 'uses' => 'UserWeightliftingController@update'));



	// User Stats //
	Route::get('user/food/{date}', array('as' => 'UserFood', 'uses' => 'UserFoodController@view'));
	Route::get('user/food/create/{date}/{mealtype}', array('as' => 'UserFood', 'uses' => 'UserFoodController@create'));
	Route::post('user/food/create', array('as' => 'UserFood', 'uses' => 'UserFoodController@store'));
	Route::get('user/food/edit', array('as' => 'UserFood', 'uses' => 'UserFoodController@edit'));
	Route::put('user/food/edit', array('as' => 'UserFood', 'uses' => 'UserFoodController@update'));

	// User Food //
	Route::get('food/', array('as' => 'Food', 'uses' => 'FoodController@index'));
	Route::get('food/create/', array('as' => 'Food', 'uses' => 'FoodController@create'));
	Route::post('food/create', array('as' => 'Food', 'uses' => 'FoodController@store'));
	Route::get('food/edit/id', array('as' => 'Food', 'uses' => 'FoodController@edit'));
	Route::put('food/edit', array('as' => 'Food', 'uses' => 'FoodController@update'));

	//User Goal //
	Route::get('user/goals/', array('as' => 'UserGoal', 'uses' => 'UserGoalController@index'));
	Route::get('user/goals/create', array('as' => 'UserGoal', 'uses' => 'UserGoalController@create'));
	Route::post('user/goals/create', array('as' => 'UserGoal', 'uses' => 'UserGoalController@store'));
	Route::get('user/goals/edit', array('as' => 'UserGoal', 'uses' => 'UserGoalController@edit'));
	Route::put('user/goals/edit', array('as' => 'UserGoal', 'uses' => 'UserGoalController@update'));

	// Recipe //
	Route::get('recipe/', array('as' => 'Recipe', 'uses' => 'RecipeController@index'));
	Route::get('recipe/create', array('as' => 'Recipe', 'uses' => 'RecipeController@create'));
	Route::post('recipe/create', array('as' => 'Recipe', 'uses' => 'RecipeController@store'));
	Route::get('recipe/edit', array('as' => 'Recipe', 'uses' => 'RecipeController@edit'));
	Route::put('recipe/edit', array('as' => 'Recipe', 'uses' => 'RecipeController@update'));

	// Recipe Vote //
	
	Route::post('recipe/vote', array('as' => 'Recipe', 'uses' => 'RecipeController@voteStore'));

});




