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
	Route::get('user/create/', array('as' => 'User', 'uses' => 'UserController@create'));
	Route::get('user/success/', array('as' => 'UserSuccess', 'uses' => 'UserController@success'));
	Route::post('user/create/', array('as' => 'User', 'uses' => 'UserController@store'));
	
	//---RESOURCES---//
	
	
	Route::group(array('before' => 'auth'), function()
{
	Route::get('/', array('as' => 'Dashboard', 'uses' => 'UserGoalController@dashboard'));



	// User Stats //
	Route::get('user/stats/', array('as' => 'UserStats', 'uses' => 'UserStatController@index'));
	Route::get('user/stats/create', array('as' => 'UserStatCreate', 'uses' => 'UserStatController@create'));
	Route::post('user/stats/create', array('as' => 'UserStatCreateCreate', 'uses' => 'UserStatController@store'));
	Route::get('user/stats/edit', array('as' => 'UserStatEdit', 'uses' => 'UserStatController@edit'));
	Route::put('user/stats/edit', array('as' => 'UserStatEdit', 'uses' => 'UserStatController@update'));

		// User Cardio //
	//Route::get('user/cardio/', array('as' => 'UserCardio', 'uses' => 'UserCardioController@index'));
	Route::get('user/cardio/create', array('as' => 'UserCardioCreate', 'uses' => 'UserCardioController@create'));
	Route::post('user/cardio/create', array('as' => 'UserCardioCreate', 'uses' => 'UserCardioController@store'));
	Route::get('user/cardio/edit', array('as' => 'UserCardioEdit', 'uses' => 'UserCardioController@edit'));
	Route::put('user/cardio/edit', array('as' => 'UserCardioEdit', 'uses' => 'UserCardioController@update'));


			// User Weightlifting //
	//Route::get('user/cardio/', array('as' => 'UserCardio', 'uses' => 'UserCardioController@index'));
	Route::get('user/weightlifting/create', array('as' => 'UserWeightliftingCreate', 'uses' => 'UserWeightliftingController@create'));
	Route::post('user/weightlifting/create', array('as' => 'UserWeightliftingCreate', 'uses' => 'UserWeightliftingController@store'));
	Route::get('user/weightlifting/edit', array('as' => 'UserWeightliftingEdit', 'uses' => 'UserWeightliftingController@edit'));
	Route::put('user/weightlifting/edit', array('as' => 'UserWeightliftingEdit', 'uses' => 'UserWeightliftingController@update'));



	// User Stats //
	Route::get('user/food/{date}', array('as' => 'UserFoods', 'uses' => 'UserFoodController@view'));
	Route::get('user/food/create/{date}/{mealtype}', array('as' => 'UserFoodCreate', 'uses' => 'UserFoodController@create'));
	Route::post('user/food/create', array('as' => 'UserFoodCreate', 'uses' => 'UserFoodController@store'));
	Route::get('user/food/edit', array('as' => 'UserFoodEdit', 'uses' => 'UserFoodController@edit'));
	Route::put('user/food/edit', array('as' => 'UserFoodEdit', 'uses' => 'UserFoodController@update'));

	// User Food //
	Route::get('food/', array('as' => 'Foods', 'uses' => 'FoodController@index'));
	Route::get('food/create/', array('as' => 'FoodCreate', 'uses' => 'FoodController@create'));
	Route::post('food/create', array('as' => 'FoodCreate', 'uses' => 'FoodController@store'));
	Route::get('food/edit/id', array('as' => 'FoodEdit', 'uses' => 'FoodController@edit'));
	Route::put('food/edit', array('as' => 'FoodEdit', 'uses' => 'FoodController@update'));

	//User Goal //
	Route::get('user/goals/', array('as' => 'UserGoals', 'uses' => 'UserGoalController@index'));
	Route::get('user/goals/create', array('as' => 'UserGoalCreate', 'uses' => 'UserGoalController@create'));
	Route::post('user/goals/create', array('as' => 'UserGoalCreate', 'uses' => 'UserGoalController@store'));

	Route::get('user/goals/{id}/edit', array('as' => 'UserGoalEdit', 'uses' => 'UserGoalController@edit'));
	Route::put('user/goals/{id}/edit', array('as' => 'UserGoalEdit', 'uses' => 'UserGoalController@update'));

	// Recipe //
	Route::get('recipe/', array('as' => 'Recipes', 'uses' => 'RecipeController@index'));
	Route::get('recipe/create', array('as' => 'RecipeCreate', 'uses' => 'RecipeController@create'));
	Route::post('recipe/create', array('as' => 'RecipeCreate', 'uses' => 'RecipeController@store'));

	Route::get('recipe/edit', array('as' => 'RecipeEdit', 'uses' => 'RecipeController@edit'));
	Route::put('recipe/edit', array('as' => 'RecipeEdit', 'uses' => 'RecipeController@update'));

	// Recipe Vote //
	
	Route::post('recipe/vote', array('as' => 'Recipe', 'uses' => 'RecipeController@voteStore'));
	Route::post('recipe/vote/edit', array('as' => 'Recipe', 'uses' => 'RecipeController@voteEdit'));

});




