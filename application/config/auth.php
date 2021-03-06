<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Retrieve Users By ID
	|--------------------------------------------------------------------------
	|
	| This method is called by the Auth::user() method when attempting to
	| retrieve a user by their user ID.
	|
	| You are free to change this method for your application however you wish.
	|
	*/

	'by_id' => function($id)
	{
		return User::find($id);
	},

	/*
	|--------------------------------------------------------------------------
	| Retrieve Users By Username
	|--------------------------------------------------------------------------
	|
	| This method is called by the Auth::check() method when attempting to
	| retrieve a user by their username. 
	|
	| You are free to change this method for your application however you wish.
	|
	| Note: This method must return an object that has an "id" and a "password"
	|       property. The type of object returned doesn't matter.
	|
	*/

	'by_username' => function($username)
	{
		return User::where('email', '=', $username)->first();
	},

);