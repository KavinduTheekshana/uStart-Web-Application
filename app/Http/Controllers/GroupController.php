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


      $user = User::find($request->user_id);
      $user->group_status=true;
      $user->save();
      $user->customers()->attach($request->customer_id);

      $count = count($request->customer_id);
      for($i = 0;$i<$count;$i++){
        $customerid = $request->customer_id[$i];
        $customer = Customer::find($customerid);
        $customer->group_status=true;
        $customer->save();
      }

      return redirect()->back()->with('customer_create_status', 'Group Created Sucessfully');
      






        // $user = User::Find(8);       
        // return $user->customers;
        // return$request->customer_id ;
        // return Customer::all();
        // $task=user::find($request->user_id);
        // $task->status=false;
        // $task->save();
        // return $user;
        // return redirect()->back()->with('customer_create_status', 'Group Created Sucessfully');
        // $customer=True;
        // $customer->customer_group_update_user()->attach(true);
        // return $user;         
        // return $user;
        
    }


}
