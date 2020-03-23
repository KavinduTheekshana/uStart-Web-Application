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

Route::resource('users', 'UsersController');

Route::get('mobilelogin','auth\LoginController@mobileLogin');
Route::get('checkLogin','auth\LoginController@checkLogin');


Route::get('getProfileDetails','UsersController@getProfileDetails');
Route::get('profileUpdate','ProfileController@postProfileUpdate');

Route::get('currentPassword','auth\LoginController@currentPassword');
Route::get('updatePasswordMobile','auth\LoginController@updatePasswordMobile');