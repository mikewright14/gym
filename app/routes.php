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
	
	// User Resource
	Route::resource('users', 'UserController');
	Route::resource('userStat', 'UserStatController');
	Route::resource('userCardio', 'UserCardioController');
	Route::resource('userWeightlifting', 'UserWeightliftingController');



	// route to show the Success message upon registering
	Route::get('users.success', array('uses' => 'UserController@success'));

	// route to show the form to enter stats a for a user.
	Route::get('users.createStats', array('uses' => 'UserController@createStats'));

	// route to show the registration form
	Route::get('register', array('uses' => 'UserController@showRegister'));

	// route to show the login form
	Route::get('login', array('uses' => 'HomeController@showLogin'));

	// route to process the form
	Route::post('login', array('uses' => 'HomeController@doLogin'));

	Route::get('/', 'HomeController@index')->before('auth');




	// app/routes.php

	Route::get('logout', array('uses' => 'HomeController@doLogout'));
