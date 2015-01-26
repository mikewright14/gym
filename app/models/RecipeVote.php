<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class RecipeVote extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'recipe_vote';
	protected $primaryKey = 'recipeVoteID';

    public $timestamps = false;


     public function UserVoteRecipe()
    {
        return $this->hasOne('User');
    }

     public function RecipeVoteRecipe()
    {
        return $this->hasOne('Recipe');
    }

   
}
