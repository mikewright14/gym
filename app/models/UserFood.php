<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class UserFood extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user_food';
    public $timestamps = false;

     public function UserFood()
    {
        return $this->belongsTo('User');
    }

    public function Foods()
    {
        return $this->belongsTo('Food');
    }


}
