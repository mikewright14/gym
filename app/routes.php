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

Route::get('/', function()
{
	return View::make('hello');
});

	
	//---RESOURCES---//
	
	
	
	
	

	
	Route::resource('userGoal', 'UserGoalController');

	// User Routes // 
	Route::get('user/create/', array('as' => 'User', 'uses' => 'UserController@create'))->before('auth');
	Route::get('user/success/', array('as' => 'User', 'uses' => 'UserController@success'))->before('auth');
	Route::post('user/create/', array('as' => 'User', 'uses' => 'UserController@store'))->before('auth');


	// User Stats //
	Route::get('user/stats/', array('as' => 'UserStat', 'uses' => 'UserStatController@index'))->before('auth');
	Route::get('user/stats/create', array('as' => 'UserStat', 'uses' => 'UserStatController@create'))->before('auth');
	Route::post('user/stats/create', array('as' => 'UserStat', 'uses' => 'UserStatController@store'))->before('auth');
	Route::get('user/stats/edit', array('as' => 'UserStat', 'uses' => 'UserStatController@edit'))->before('auth');
	Route::put('user/stats/edit', array('as' => 'UserStat', 'uses' => 'UserStatController@update'))->before('auth');

		// User Cardio //
	//Route::get('user/cardio/', array('as' => 'UserCardio', 'uses' => 'UserCardioController@index'))->before('auth');
	Route::get('user/cardio/create', array('as' => 'UserCardio', 'uses' => 'UserCardioController@create'))->before('auth');
	Route::post('user/cardio/create', array('as' => 'UserCardio', 'uses' => 'UserCardioController@store'))->before('auth');
	Route::get('user/cardio/edit', array('as' => 'UserCardio', 'uses' => 'UserCardioController@edit'))->before('auth');
	Route::put('user/cardio/edit', array('as' => 'UserCardio', 'uses' => 'UserCardioController@update'))->before('auth');


			// User Weightlifting //
	//Route::get('user/cardio/', array('as' => 'UserCardio', 'uses' => 'UserCardioController@index'))->before('auth');
	Route::get('user/weightlifting/create', array('as' => 'UserWeightlifting', 'uses' => 'UserWeightliftingController@create'))->before('auth');
	Route::post('user/weightlifting/create', array('as' => 'UserWeightlifting', 'uses' => 'UserWeightliftingController@store'))->before('auth');
	Route::get('user/weightlifting/edit', array('as' => 'UserWeightlifting', 'uses' => 'UserWeightliftingController@edit'))->before('auth');
	Route::put('user/weightlifting/edit', array('as' => 'UserWeightlifting', 'uses' => 'UserWeightliftingController@update'))->before('auth');



	// User Stats //
	Route::get('user/food/{date}', array('as' => 'UserFood', 'uses' => 'UserFoodController@view'))->before('auth');
	Route::get('user/food/create/{date}/{mealtype}', array('as' => 'UserFood', 'uses' => 'UserFoodController@create'))->before('auth');
	Route::post('user/food/create', array('as' => 'UserFood', 'uses' => 'UserFoodController@store'))->before('auth');
	Route::get('user/food/edit', array('as' => 'UserFood', 'uses' => 'UserFoodController@edit'))->before('auth');
	Route::put('user/food/edit', array('as' => 'UserFood', 'uses' => 'UserFoodController@update'))->before('auth');

	// User Food //
	Route::get('food/', array('as' => 'Food', 'uses' => 'FoodController@index'))->before('auth');
	Route::get('food/create/', array('as' => 'Food', 'uses' => 'FoodController@create'))->before('auth');
	Route::post('food/create', array('as' => 'Food', 'uses' => 'FoodController@store'))->before('auth');
	Route::get('food/edit/id', array('as' => 'Food', 'uses' => 'FoodController@edit'))->before('auth');
	Route::put('food/edit', array('as' => 'Food', 'uses' => 'FoodController@update'))->before('auth');


	Route::get('user/goals/', array('as' => 'UserGoal', 'uses' => 'UserGoalController@index'))->before('auth');
	Route::get('user/goals/create', array('as' => 'UserGoal', 'uses' => 'UserGoalController@create'))->before('auth');
	Route::post('user/goals/create', array('as' => 'UserGoal', 'uses' => 'UserGoalController@store'))->before('auth');
	Route::get('user/goals/edit', array('as' => 'UserGoal', 'uses' => 'UserGoalController@edit'))->before('auth');
	Route::put('user/goals/edit', array('as' => 'UserGoal', 'uses' => 'UserGoalController@update'))->before('auth');



	
	// route to show the registration form
	Route::get('register', array('uses' => 'UserController@showRegister'));

	// route to show the login form
	Route::get('login', array('uses' => 'HomeController@showLogin'));

	// route to process the form
	Route::post('login', array('uses' => 'HomeController@doLogin'));

	Route::get('/', 'HomeController@index')->before('auth');




	// app/routes.php

	Route::get('logout', array('uses' => 'HomeController@doLogout'));
