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

Route::get('dashboard', 'DashboardController@index')->middleware('auth');
Route::get('logout', 'DashboardController@logout');

// Route::get('dashboard', function () {
//     return view('dashboard');
// })->middleware('auth');

Route::get('addusers', function () {
    return view('users/addusers');
});

Route::get('profile','ProfileController@profile')->middleware('auth');
Route::post('updateprofile', 'ProfileController@updateprofile');
Route::post('updateprofilepicture', 'ProfileController@updateprofilepicture');
Route::post('changePassword', 'ProfileController@changePassword');




Route::get('addusers','UsersController@addusers')->middleware('auth');
Route::post('/adduser', 'UsersController@adduser');
Route::get('manageusers','UsersController@manageusers')->middleware('auth');
Route::get('userslist','UsersController@userslist')->middleware('auth');
Route::get('edituser/{id}', 'UsersController@edituser')->middleware('auth');
Route::post('updateuser','UsersController@updateuser')->middleware('auth');
Route::get('user_diactivate/{id}', 'UsersController@user_diactivate')->middleware('auth');
Route::get('user_activate/{id}', 'UsersController@user_activate')->middleware('auth');
Route::get('user_delete/{id}', 'UsersController@user_delete')->middleware('auth');


Route::get('addcustomers', function () {
    return view('customers/addcustomers');
});
Route::post('/addcustomer', 'CustomerController@addcutomer');
Route::get('managecustomers','CustomerController@managecustomers');
Route::get('editcustomer/{id}', 'CustomerController@editcustomer');
Route::post('updatecustomer','CustomerController@updatecustomer');
Route::get('customer_diactivate/{id}', 'CustomerController@customer_diactivate');
Route::get('customer_activate/{id}', 'CustomerController@customer_activate');


Route::get('jsonOupt','CustomerController@jsonOupt')->middleware('auth');


Route::get('category','CategoryController@category')->middleware('auth');
Route::post('/addcategory', 'CategoryController@addcategory')->middleware('auth');
Route::post('/editcategory', 'CategoryController@editcategory')->middleware('auth');
Route::get('category_diactivate/{id}', 'CategoryController@category_diactivate')->middleware('auth');
Route::get('category_activate/{id}', 'CategoryController@category_activate')->middleware('auth');



Route::get('addproduct','ProductController@addproduct')->middleware('auth');
Route::post('/saveproduct','ProductController@saveproduct')->middleware('auth');
Route::get('manageproduct','ProductController@manageproduct')->middleware('auth');


// Route::get('manageproduct', function () {
//     return view('products/manageproduct');
// });


Route::get('managecategory', function () {
    return view('category/managecategory');
});


Route::get('addlocation','LocationController@addlocation')->middleware('auth');
Route::get('viewlocation','LocationController@viewlocation')->middleware('auth');
Route::get('viewalllocation','LocationController@viewalllocation')->middleware('auth');
Route::post('saveshoploaction', 'LocationController@saveshoploaction')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('creategroup','GroupController@creategroup');
Route::get('managegroup','GroupController@managegroup');
Route::post('addgroup', 'GroupController@addgroup');









