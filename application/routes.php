<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Application Routes
	|--------------------------------------------------------------------------
	|
	| Here is the public API of your application. To add functionality to your
	| application, you just add to the array located in this file.
	|
	| It's a breeze. Simply tell Laravel the request URIs it should respond to.
	|
	| Need more breathing room? Organize your routes in their own directory.
	| Here's how: http://laravel.com/docs/start/routes#organize
	|
	*/

	'GET /' => function(){
		return View::make('home/index');
	},
	
	'GET /poem' => function(){
		return View::make('poem/index');
	},
	
	'POST /poem/submit' => function(){
		$submitted_data = array(
			'name' => Input::get('name'),
			'poem' => Input::get('poem')
		);
		
		$query = DB::table('poems')->insert($submitted_data);
		return Redirect::to('/poem');
	},

);