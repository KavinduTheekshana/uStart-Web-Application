<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class AttendenceController extends Controller
{
    public function dailyatendence(){
        $id =Auth::user()->id;
        $authprofile = DB::table('users')->where(['id'=>$id])->first();
        return view('attendence/dailyatendence',['authprofile'=>$authprofile]);
      }




      public function monthlyattendence(){
        $id =Auth::user()->id;
        $authprofile = DB::table('users')->where(['id'=>$id])->first();
        return view('attendence/monthlyattendence',['authprofile'=>$authprofile]);
      }
}
