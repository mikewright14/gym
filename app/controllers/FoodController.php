<?php

class FoodController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
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
			


		

		return View::make('Food.view')->with('users', $users)->with('recents', $recents)->with('frequents', $frequents);



	
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
			return View::make('Food.create');
	}



	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$food = new Food;
		
	    $food->brandName = Input::get('brandName');
	    $food->foodName = Input::get('foodName');
	    $food->Calories = Input::get('Calories');
	    $food->Protein = Input::get('Protein');
	    $food->Carbs = Input::get('Carbs');
	    $food->Fats = Input::get('Fats');
	    $food->save();

		
    	return Redirect::to('Food');
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
