<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

<<<<<<< HEAD
=======
Route::get('/', function () {
    return view('welcome');
});
Route::get('test', 'mainController@booking');
>>>>>>> 8fdf0dadfae918fffabb0aecd5be5672a65bb96e

Route::get('/', 'mainController@user');

Route::get('test', 'booking@hello');

Route::get('/signup', 'mainController@signup');

Route::get('/login', 'mainController@login');

Route::get('/booking', 'mainController@booking');

Route::get('/info', 'mainController@info');

Route::get('/summary', 'mainController@summary');
