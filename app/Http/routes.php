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


Route::get('/food_type', 'LaunchController@get_type_list');

Route::resource('restaurants', 'LaunchController');

Route::get('/coming', function () {
    return view('restaurants.coming');
});

Route::get('/random_result', 'LaunchController@random_choose');