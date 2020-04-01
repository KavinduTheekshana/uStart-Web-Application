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

Route::get('getProductList','ProductController@getProductList');

Route::get('getCategoryList','CategoryController@getCategoryList');
Route::get('getCategoryName','CategoryController@getCategoryName');

Route::get('CreateCart','CartsController@CreateCart');
Route::get('getCartItemList','CartsController@getCartItemList');
Route::get('DeleteCartItem','CartsController@DeleteCartItem');
Route::get('OrderNowMobile','CartsController@OrderNowMobile');
Route::get('SingleCustomerOrderdItems','CartsController@SingleCustomerOrderdItems');


Route::get('RepGetCustomers','GroupController@RepGetCustomers');