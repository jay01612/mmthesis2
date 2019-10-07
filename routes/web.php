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

Route::get('/', function () {
    return view('welcome');
});
Route::get('test', 'mainController@booking');



Route::get('/signup', 'mainController@signup');

Route::get('/login', 'mainController@login');

Route::get('/user', 'mainController@user');

Route::get('/booking', 'mainController@booking');

Route::get('/info', 'mainController@info');
