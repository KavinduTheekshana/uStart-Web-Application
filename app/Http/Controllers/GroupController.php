<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GroupController extends Controller
{
    public function managegroup(){  
        $customers = DB::table('users')->where(['location_status'=>0,'user_type'=>'2'])->get(); 
        return view('groups/managegeoups',['customers'=>$customers]);
      }

      public function creategroup(){
        $customers = DB::table('users')->where(['user_type'=>'2','group_status'=>0])->get();  
        return view('groups/creategroup',['customers'=>$customers]);
      }
}
