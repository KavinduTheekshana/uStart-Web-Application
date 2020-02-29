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
Route::post('/adduser', 'UsersController@adduser');
Route::get('manageusers','UsersController@manageusers');
Route::get('userslist','UsersController@userslist');
Route::get('edituser/{id}', 'UsersController@edituser');
Route::post('updateuser','UsersController@updateuser');
Route::get('user_diactivate/{id}', 'UsersController@user_diactivate');
Route::get('user_activate/{id}', 'UsersController@user_activate');
Route::get('user_delete/{id}', 'UsersController@user_delete');


Route::get('addcustomers', function () {
    return view('customers/addcustomers');
});
Route::post('/addcustomer', 'CustomerController@addcutomer');
Route::get('managecustomers','CustomerController@managecustomers');
Route::get('editcustomer/{id}', 'CustomerController@editcustomer');
Route::post('updatecustomer','CustomerController@updatecustomer');
Route::get('customer_diactivate/{id}', 'CustomerController@customer_diactivate');
Route::get('customer_activate/{id}', 'CustomerController@customer_activate');



Route::get('jsonOupt','CustomerController@jsonOupt');


Route::get('category','CategoryController@category');
Route::post('/addcategory', 'CategoryController@addcategory');
Route::post('/editcategory', 'CategoryController@editcategory');
Route::get('category_diactivate/{id}', 'CategoryController@category_diactivate');
Route::get('category_activate/{id}', 'CategoryController@category_activate');



Route::get('addproduct','ProductController@addproduct');
Route::post('/saveproduct','ProductController@saveproduct');
Route::get('manageproduct','ProductController@manageproduct');


// Route::get('manageproduct', function () {
//     return view('products/manageproduct');
// });


Route::get('managecategory', function () {
    return view('category/managecategory');
});


Route::get('addlocation','LocationController@addlocation');
Route::get('viewlocation','LocationController@viewlocation');
Route::get('viewalllocation','LocationController@viewalllocation');
Route::post('saveshoploaction', 'LocationController@saveshoploaction');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('creategroup','GroupController@creategroup');
Route::get('managegroup','GroupController@managegroup');





Route::get('ajaxdata', 'AjaxController@index')->name('ajaxdata');
Route::get('ajaxdata/getdata', 'AjaxController@getdata')->name('ajaxdata.getdata');

Route::post('ajaxdata/postdata', 'AjaxController@postdata')->name('ajaxdata.postdata');

Route::get('ajaxdata/fetchdata', 'AjaxController@fetchdata')->name('ajaxdata.fetchdata');
Route::get('ajaxdata/removedata', 'AjaxController@removedata')->name('ajaxdata.removedata');
Route::get('ajaxdata/massremove', 'AjaxController@massremove')->name('ajaxdata.massremove');



