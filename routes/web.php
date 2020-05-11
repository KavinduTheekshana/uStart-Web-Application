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


Route::get('dashboard', 'DashboardController@index')->middleware('Admin');
Route::get('logout', 'DashboardController@logout');

// Route::get('dashboard', function () {
//     return view('dashboard');
// })->middleware('auth');

Route::get('addusers', function () {
    return view('users/addusers');
});

Route::get('profile','ProfileController@profile')->middleware('Admin');
Route::post('updateprofile', 'ProfileController@updateprofile')->middleware('auth');
Route::post('updateprofilepicture', 'ProfileController@updateprofilepicture')->middleware('auth');
Route::post('changePassword', 'ProfileController@changePassword')->middleware('auth');



Route::get('addusers','UsersController@addusers')->middleware('auth');
Route::post('/adduser', 'UsersController@adduser')->middleware('auth');
Route::get('manageusers','UsersController@manageusers')->middleware('auth');
Route::get('userslist','UsersController@userslist')->middleware('auth');
Route::get('edituser/{id}', 'UsersController@edituser')->middleware('auth');
Route::post('updateuser','UsersController@updateuser')->middleware('auth');
Route::get('user_diactivate/{id}', 'UsersController@user_diactivate')->middleware('auth');
Route::get('user_activate/{id}', 'UsersController@user_activate')->middleware('auth');
Route::get('user_delete/{id}', 'UsersController@user_delete')->middleware('auth');


// Route::get('addcustomers', function () {
//     return view('customers/addcustomers');
// });
Route::get('addcustomers', 'CustomerController@addcustomers')->middleware('auth');
Route::post('/addcustomer', 'CustomerController@addcutomer')->middleware('auth');
Route::get('managecustomers','CustomerController@managecustomers')->middleware('auth');
Route::get('editcustomer/{id}', 'CustomerController@editcustomer')->middleware('auth');
Route::post('updatecustomer','CustomerController@updatecustomer')->middleware('auth');
Route::get('customer_diactivate/{id}', 'CustomerController@customer_diactivate')->middleware('auth');
Route::get('customer_activate/{id}', 'CustomerController@customer_activate')->middleware('auth');


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

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');


Route::get('creategroup','GroupController@creategroup')->middleware('auth');
Route::get('managegroup','GroupController@managegroup')->middleware('auth');
Route::post('addgroup', 'GroupController@addgroup')->middleware('auth');
Route::get('grouplist', 'GroupController@grouplist')->middleware('auth');
Route::get('deletecustomergroup/{id}', 'GroupController@deletecustomergroup')->middleware('auth');



//attendence
Route::get('dailyatendence','AttendenceController@dailyatendence')->middleware('auth');
Route::get('monthlyattendence','AttendenceController@monthlyattendence')->middleware('auth');

Route::get('group','GroupController@group');


//cart web
Route::get('cart','CartsController@cart');
Route::get('cartitem/{id}','CartsController@cartitem');
Route::get('MarkCartItemIsComplete/{id}','CartsController@MarkCartItemIsComplete');


Route::post('attendencejs','AttendenceController@attendencejs');

Route::get('datedate','ProductController@datedate');






