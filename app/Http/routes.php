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

Route::get('/', 'ViewController@index');
Route::get('home', 'HomeController@index');
Route::get('category', 'CategoryController@index');
Route::get('widget', 'CategoryController@widget');
Route::get('sub_category', 'CategoryController@subCategory');
Route::get('uploadform','CategoryController@uploadForm');
Route::get('user/{id}', 'ViewController@showProfile');
Route::get('view_musics', 'ViewController@viewMusics');


Route::get('response', function () {
    return  response()->json(['name' => 'Abigail', 'state' => 'CA']);;
});

Route::get('result/{$roll}', function () {
    return view('greeting', ['name' => 'Masum Hasan bfdsf rewrew']);
});


Route::post('create','CategoryController@create');
Route::post('create_sub','CategoryController@postSubCategory');
Route::post('upload','CategoryController@upload');
Route::post('saveMusics','CategoryController@saveMusics');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



