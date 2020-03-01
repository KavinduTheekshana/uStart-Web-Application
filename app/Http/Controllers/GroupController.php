<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Customer;

class GroupController extends Controller
{
    public function managegroup(){  
        $customers = DB::table('users')->where(['location_status'=>0,'user_type'=>'2'])->get(); 
        return view('groups/managegeoups',['customers'=>$customers]);
      }

      public function creategroup(){
        $users = User::whereGroupStatus(0)->get();
        $customers = Customer::whereGroupStatus(0)->get();
        // $customers = DB::table('users')->where(['user_type'=>'2','group_status'=>0])->get();  
        return view('groups/creategroup',['users'=>$users,'customers'=>$customers]);
      }

      public function addgroup(Request $request){


// $user = User::Find(36);
// return $user->customers;

        // return$request->customer_id ;
        // return Customer::all();
        $user = User::find($request->user_id);
        
        $user->customers()->attach($request->customer_id);
        // return $user;
        
      }


}
