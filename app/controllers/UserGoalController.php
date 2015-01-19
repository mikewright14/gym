<?php

class UserGoalController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$id = Auth::id();
		$users = User::with('UserStat', 'UserGoal')->find($id);
		



		
		return View::make('userGoal.view')->with('users', $users);
	
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('userGoal.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$userGoal = new UserGoal;
		$userGoal->user_id = $id = Auth::id();
	    $userGoal->goalName = Input::get('goalName');
	    $userGoal->goalType = Input::get('goalType');
	    $userGoal->startingValue = Input::get('startingValue');
	    $userGoal->endingValue = Input::get('endingValue');
	    $userGoal->currentValue = Input::get('currentValue');
	    $userGoal->save();

	    return Redirect::to('userGoal');
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
		 $userGoal = UserGoal::find($id);


    // show the edit form and pass the userStat
    return View::make('userGoal.edit')
        ->with('userGoal', $userGoal);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
		$userGoal = UserGoal::find($id);
		$userGoal->user_id = $id = Auth::id();
	    $userGoal->goalName = Input::get('goalName');
	    $userGoal->goalType = Input::get('goalType');
	    $userGoal->startingValue = Input::get('startingValue');
	    $userGoal->endingValue = Input::get('endingValue');
	    $userGoal->currentValue = Input::get('currentValue');
	    $userGoal->save();

	    return Redirect::to('userGoal');
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
