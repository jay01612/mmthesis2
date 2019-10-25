<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('nextStep', 'apiControllers@nextStep');
Route::get('getThemes', 'mainController@getTheme');

Route::post('checkAvailability', 'mainController@checkAvailability');

//Booking
Route::post('registerClient', 'mainController@registerClient');

//Client Info Save
Route::post('clientInfo', 'mainController@clientInfo');
Route::get('getInformation', 'mainController@getInformation');
Route::get('sendVerification', 'mainController@sendVerification');
Route::post('verifycode', 'mainController@verifycode');
Route::post('sendEmail', 'mainController@sendEmail');

// login
Route::post('login', 'apiController@login');
Route::get('logout', 'apiController@logout');

Route::get('getBookedNotPayed', 'apiController@getBookedNotPayed');
Route::get('getBookedNotPayed1', 'apiController@getBookedNotPayed1');

//Route::post('signup', 'mainController@addUserAdmin');
