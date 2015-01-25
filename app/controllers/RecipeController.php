<?php

class RecipeController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$id = Auth::id();
		$recipes = Recipe::all();
		


		
		return View::make('recipe.view')->with('recipes', $recipes);
	
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('recipe.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{	
		$id = Auth::id();

		$recipe = new Recipe;
		$recipe->user_id = $id;
	    $recipe->recipeName = Input::get('recipeName');
	    $recipe->recipeDesc = Input::get('recipeDesc');
	    $recipe->proteinPerServing = Input::get('proteinPerServing');
	    $recipe->fatsPerServing = Input::get('fatsPerServing');
	    $recipe->carbsPerServing = Input::get('carbsPerServing');
	    $recipe->calsPerServing = Input::get('calsPerServing');
	    $recipe->save();

	    return Redirect::to('recipe');
	}

	public function voteStore()
	{	
		$id = Auth::id();

		if (Input::get('thumb-up')){
			$vote = 1;
		}else{
			$vote = 0;
		}

		$recipe = new RecipeVote;
		$recipe->user_id = $id;
	    $recipe->recipe_id = Input::get('recipeID');
	    $recipe->vote = $vote;
	    
	    $recipe->save();

	    return Redirect::to('recipe');
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

	    return Redirect::to('recipe');
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
