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
    return view('addusers');
});

Route::get('manageusers', function () {
    return view('manageusers');
});

Route::get('addcustomers', function () {
    return view('addcustomers');
});

Route::get('managecustomers', function () {
    return view('managecustomers');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
