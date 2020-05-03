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


//Auth
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('users', 'UsersController');

//login
Route::get('mobilelogin','auth\LoginController@mobileLogin');
Route::get('checkLogin','auth\LoginController@checkLogin');

//Profile Details
Route::get('getProfileDetails','UsersController@getProfileDetails');
Route::post('profileUpdate','ProfileController@postProfileUpdate');

//password Change
Route::get('currentPassword','auth\LoginController@currentPassword');
Route::get('updatePasswordMobile','auth\LoginController@updatePasswordMobile');

//products and categry
Route::get('getProductList','ProductController@getProductList');
Route::get('getCategoryList','CategoryController@getCategoryList');
Route::get('getCategoryName','CategoryController@getCategoryName');


//cart details
Route::get('CreateCart','CartsController@CreateCart');
Route::get('getCartItemList','CartsController@getCartItemList');
Route::get('DeleteCartItem','CartsController@DeleteCartItem');
Route::get('OrderNowMobile','CartsController@OrderNowMobile');
Route::get('SingleCustomerOrderdItems','CartsController@SingleCustomerOrderdItems');
Route::get('MarkOrderItemIsComplete','CartsController@MarkOrderItemIsComplete');


// reset pasword using email
Route::get('verificationcode','Auth\ResetPasswordController@verificationcode');
Route::get('checkverificationcode','auth\ResetPasswordController@checkverificationcode');
Route::get('resetpasswordmobile','auth\ResetPasswordController@resetpasswordmobile');

//customer group
Route::get('RepGetCustomers','GroupController@RepGetCustomers');

//Get Lat and Lng
Route::get('getlatandlng','LocationController@getlatandlng');
Route::get('savecurrentlocation','LocationController@savecurrentlocation');