<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'firstName'     => 'Mike',
			'lastName'     => 'Wright',
			'username' => 'tyrenzo',
			'email'    => 'mike@ketocunt.com',
			'password' => Hash::make('haha123'),
		));
	}

}