<?php

class UserWeightliftingController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('userWeightlifting.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$user = new UserWeightlifting;
		$user->user_id = Auth::id();

	    $user->maxBenchPressWeight = Input::get('maxBenchPressWeight');
	    $user->repBenchPressWeight = Input::get('repBenchPressWeight');
	    $user->repBenchPressReps = Input::get('repBenchPressReps');

	    $user->maxSquatWeight = Input::get('maxSquatWeight');
	    $user->repSquatWeight = Input::get('repSquatWeight');
	    $user->repSquatReps = Input::get('repSquatReps');

	    $user->maxDeadliftWeight = Input::get('maxDeadliftWeight');
	    $user->repDeadliftWeight = Input::get('repDeadliftWeight');
	    $user->repDeadliftReps = Input::get('repDeadliftReps');

	    $user->maxOverheadPressWeight = Input::get('maxOverheadPressWeight');
	    $user->repOverheadPressWeight = Input::get('repOverheadPressWeight');
	    $user->repOverheadPressReps = Input::get('repOverheadPressReps');
	   
	    $user->save();

		
    	return Redirect::to('userStat');
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
		return View::make('userWeightlifting.edit');
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
