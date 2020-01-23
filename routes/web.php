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
    return view('auth/login');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('addusers', function () {
    return view('users/addusers');
});

Route::get('manageusers', function () {
    return view('users/manageusers');
});

Route::get('addcustomers', function () {
    return view('customers/addcustomers');
});

Route::get('managecustomers', function () {
    return view('customers/managecustomers');
});

Route::get('addproduct', function () {
    return view('products/addproduct');
});

Route::get('manageproduct', function () {
    return view('products/manageproduct');
});

Route::get('category', function () {
    return view('category/category');
});

Route::get('managecategory', function () {
    return view('category/managecategory');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
