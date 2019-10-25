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



Route::get('/', 'mainController@user');
// Route::get('test', 'mainController@booking');
// Route::get('test', 'booking@hello');
// Route::get('/signup', 'mainController@signup');
// Route::get('/login', 'mainController@login');
Route::get('/booking', 'mainController@booking');
Route::get('/info', 'mainController@info');
Route::get('/summary', 'mainController@summary');
Route::get('emails.mail', 'mainController@sendEmail');

// login admin check routes
Route::group(['middleware' => ['preventbackhistory']], function () {

    Route::group(['middleware' => ['checkislogin']], function () {
        Route::get('/login', 'apiController@index');
        Route::get('/login', 'apiController@index')->name('login');
    });
    
    Route::group(['middleware' => ['checkisuser']], function () {
        Route::get('/reports', 'pageController@index');
    });

});