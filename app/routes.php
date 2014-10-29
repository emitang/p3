<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

Route::get('/lorem-ipsum', function()
{
	return View::make('loremipsum');
});

Route::get('/lorem-ipsum-gen', function()
{
	return Redirect::to('/lorem-ipsum');
});

Route::post('/lorem-ipsum-gen', function()
{
	$input = Input::get('paras');
	return View::make('loremipsumgen')->with('num', $input);
});

Route::get('/random-user', function()
{
	return View::make('randomusers');
});

Route::get('/random-user-gen', function()
{
	return Redirect::to('/random-user');
});

Route::post('/random-user-gen', function()
{
	$data = Input::except('_token');
	return View::make('randomusergen')->with('users', $data);
});

