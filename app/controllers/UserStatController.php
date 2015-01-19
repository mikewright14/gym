<?php

class UserStatController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	

		$id = Auth::id();
		$users = User::with('UserStat', 'UserNutrition','UserWeightlifting')->find($id);
		$cardios = User::find($id)->UserCardio;




		
		return View::make('userStat.view')->with('users', $users)->with('cardios', $cardios);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
			return View::make('userStat.create');
	}





	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{


		$userStat = new UserStat;
		$userStat->user_id = $id = Auth::id();
	    $userStat->height = Input::get('height');
	    $userStat->weight = Input::get('weight');
	    $userStat->activity = Input::get('activity');
	    $userStat->age = Input::get('age');
	    $userStat->sex = Input::get('sex');
	    $userStat->save();

	    // Set variables for the calorie intake calculation

	     $height =  $userStat->height;
	     $weight =  $userStat->weight;
	     $activity =  $userStat->activity;
	     $age =  $userStat->age;
	     $sex =  $userStat->sex;

	    // Change the measurements.
	    $KiloWeight = $weight * 0.45;
	    $cmHeight = $height * 2.54;

	    // Activity levels value
		switch($activity)
	    				{
	   		case "1":
	    	$activityLevel = 1.2;
	    	break;

	    	case "2":
	    	$activityLevel = 1.375;
	    	break;

	    	case "3":
	    	$activityLevel = 1.55;
	    	break;

	    	case "4":
	    	$activityLevel = 1.725;
	    	break;

	    	case "5":
	    	$activityLevel = 1.9;
	    	break;
	    }

	    // Define the gender
	     if ($sex == "Male"){

	     	$bmr = 66 + ( 13.7 * $KiloWeight) + (5 * $cmHeight) - (6.8 * $age);
	    }
		
	        if ($sex == "Female"){

	     	$bmr = 665.0955 + ( 9.5634 * $KiloWeight) + (1.8496 * $cmHeight) - (4.6756 * $age);
	     	
	     	
	     	
	     }

	     // If BMR exists.
	     if ($bmr){

	     	 $tdee = $bmr * $activityLevel;
	     	$calories = $tdee - 500;
	     	$protein = ($calories * 0.3) / 4;
	     	$carbs = ($calories * 0.05) / 4;
	     	$fats = ($calories * 0.65) / 9;


	    $userNutrition = new UserNutrition;
		$userNutrition->user_id = Auth::id();
	    $userNutrition->calories = $calories;
	    $userNutrition->protein = $protein;
	    $userNutrition->carbs = $carbs;
	    $userNutrition->fats = $fats;
	    $userNutrition->save();
	     }

    	return Redirect::to('userStat.success');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit()
	{

		$id = Auth::id();
		 $userStat = User::find($id)->UserStat;

		
    // show the edit form and pass the userStat
    return View::make('userStat.edit')
        ->with('userStat', $userStat);
		
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{	


		$id = Auth::id();
		$userStat = User::find($id)->UserStat;
		
		$userStat->user_id = $id;
	    $userStat->height = Input::get('height');
	    $userStat->weight = Input::get('weight');
	    $userStat->activity = Input::get('activity');
	    $userStat->age = Input::get('age');
	    $userStat->sex = Input::get('sex');
	    $userStat->save();


	    return Redirect::to('/user/stats/');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
