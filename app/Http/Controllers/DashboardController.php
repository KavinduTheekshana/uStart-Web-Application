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
        return view('dashboard',['authprofile'=>$authprofile]);
    }


    public function logout(){
        Auth::logout();
        return view('auth/login');
    }
}
