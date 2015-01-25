<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Recipe extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'recipe';
	protected $primaryKey = 'recipeID';
    public $timestamps = false;


     public function User()
    {
        return $this->belongsTo('User', 'user_id', 'id');
    }

     public function Vote()
    {
        return $this->hasOne('RecipeVote');
    }

   
}
