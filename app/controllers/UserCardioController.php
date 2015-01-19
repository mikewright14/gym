<?php

class UserCardioController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('userCardio.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$user = new UserCardio;
		$user->user_id = Auth::id();
		$user->cardioType = Input::get('cardioType');
	    $user->cardioDuration = Input::get('cardioDuration');
	    $user->cardioLength = Input::get('cardioLength');
		$user->cardioCaloriesBurnt = Input::get('cardioCaloriesBurnt');
	   	$user->save();

	   
		
    	return Redirect::to('user/cardio/');
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

		
		 $userCardio = User::find($id)->UserCardio;


    // show the edit form and pass the userStat
    return View::make('userCardio.edit')
        ->with('userCardio', $userCardio);
		
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{	



		$userCardio = User::find($id)->UserStat;
		$userCardio->user_id = Auth::id();
		$userCardio->cardioType = Input::get('cardioType');
	    $userCardio->cardioDuration = Input::get('cardioDuration');
	    $userCardio->cardioLength = Input::get('cardioLength');
		$userCardio->cardioCaloriesBurnt = Input::get('cardioCaloriesBurnt');
	   	$userCardio->save();

	    return Redirect::to('users/cardio/');
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
