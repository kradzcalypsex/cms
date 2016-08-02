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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['web']], function () {

});

/* This is how you customize URL
Route::get('/posts/{id}/{name}', function ($id, $name) {
    return "This is post number" . "<h1>" . $id . " </h1>" . $name;
});
*/

Route::auth();

Route::get('/home', 'HomeController@index');
