<?php

class UserFoodController extends \BaseController {



	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function view($date)
	{
		$id = Auth::id();
		
	  
   

		$users = DB::select( DB::raw("SELECT * FROM users
		LEFT JOIN user_food
		ON `users`.`id` = `user_food`.`user_id` 
		LEFT JOIN food
		ON `user_food`.`food_id` = `food`.`foodID`
		WHERE `user_food`.`user_id` = :id AND `user_food`.`dateEntry` = :mealDate"), array(
   		'id' => $id, 'mealDate' => $date, 
 		));

 		$prev =  date('Y-m-d',(strtotime ( '-1 day' , strtotime ( $date) ) ));
 		$next =  date('Y-m-d',(strtotime ( '+1 day' , strtotime ( $date) ) ));
	
		return View::make('UserFood.view')->with('users', $users)->with('date', $date)->with('next', $next)->with('prev', $prev);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($date, $mealtype)
	{
		$id = Auth::id();
		$users = User::find($id)->UserFood;


		$users = DB::select(DB::raw("SELECT * FROM `users`
							LEFT JOIN `user_food` 
							ON `users`.`id` = `user_food`.`user_id`
							LEFT JOIN `food`
							ON `user_food`.`food_id` = `food`.`foodID` "));


		$recents = DB::select(DB::raw("SELECT * FROM `user_food`
							LEFT JOIN `food` 
							ON `user_food`.`food_id` = `food`.`foodID`
							GROUP by `user_food`.`food_id`"));

		$frequents = DB::select(DB::raw("SELECT *,COUNT(*) FROM `user_food`
							LEFT JOIN `food` 
							ON `user_food`.`food_id` = `food`.`foodID`
							GROUP by `user_food`.`food_id`
							ORDER by count(*) DESC"));


			


		

		return View::make('UserFood.create')->with('users', $users)->with('recents', $recents)->with('frequents', $frequents)->with('date', $date)->with('mealtype', $mealtype);

	}



	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{	
		

	$food_checked = Input::get('foodID');
	$foodAmount_checked = Input::get('foodWeight');
	$id = Auth::id();

	$test = array_diff($food_checked, $foodAmount_checked);
	$keySelected = array();
	foreach($test as $selected){
		$keySelected[] = $selected;
	}
	
	if(is_array($food_checked))
	{
		
   		foreach($food_checked as $key => $foodID){
		if (in_array($key, $keySelected)){
			
		

		$foodAmount = $foodAmount_checked[$key];
   		$food = new UserFood;
		$food->user_id = $id;
	    $food->food_id = $foodID;
	    $food->mealType = Input::get('mealType');
	    $food->foodAmount = $foodAmount_checked[$key];
	    $food->dateEntry = Input::get('date');
	    $food->save();

	    }

   		}
	}
		
		

		
    	return Redirect::to('user/food/'.Input::get('date'));
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
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
