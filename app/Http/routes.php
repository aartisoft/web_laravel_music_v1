<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
Route::get('category', 'CategoryController@index');
Route::get('widget', 'CategoryController@widget');
Route::get('sub_category', 'CategoryController@subCategory');
Route::get('uploadform','CategoryController@uploadForm');
Route::get('user/{id}', 'WelcomeController@showProfile');


Route::get('response', function () {
    return  response()->json(['name' => 'Abigail', 'state' => 'CA']);;
});

Route::get('result/{$roll}', function () {
    return view('greeting', ['name' => 'James']);
});


Route::post('create','CategoryController@create');
Route::post('create_sub','CategoryController@postSubCategory');
Route::post('upload','CategoryController@upload');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



