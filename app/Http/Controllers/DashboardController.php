<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class DashboardController extends Controller
{
    public function index(){
        $id =Auth::user()->id;
        $authprofile = DB::table('users')->where(['id'=>$id])->first();
        $customerlocations = DB::table('customer_locations')->join('users', 'customer_locations.customer_id', '=', 'users.id')->select('customer_locations.*', 'users.shop_name')->get();
        $category = DB::table('categories')->orderBy('id', 'desc')->paginate(8); 
        $products = DB::table('products')->orderBy('id', 'desc')->paginate(5); 
        $users = DB::table('users')->where('user_type', '1')->orderBy('id', 'desc')->paginate(8);  
        $customers = DB::table('users')->where('user_type', '2')->orderBy('id', 'desc')->paginate(8);  
        $userscount = DB::table('users')->where('user_type', '1')->count();
        $customerscount = DB::table('users')->where('user_type', '2')->count();
        $productscount = DB::table('products')->count();
        $categoriescount = DB::table('categories')->count();
        return view('dashboard',['authprofile'=>$authprofile,'customerlocations'=>$customerlocations,'category'=>$category
        ,'products'=>$products,'users'=>$users,'customers'=>$customers,'userscount'=>$userscount,'customerscount'=>$customerscount
        ,'productscount'=>$productscount,'categoriescount'=>$categoriescount]);
    }


    public function logout(){
        Auth::logout();
        return view('auth/login');
    }
}
