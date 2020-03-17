<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Customer;
use Auth;

class GroupController extends Controller
{
    public function managegroup(){  
        $id =Auth::user()->id;
        $authprofile = DB::table('users')->where(['id'=>$id])->first();
        // $customer_groups = DB::table('customer_groups')->join('users', 'customer_groups.customer_id', '=', 'users.id')->groupBy('customer_groups.user_id')->get();
        $customer_groups = DB::table('customer_groups')->groupBy('customer_groups.user_id')->join('users', 'customer_groups.customer_id', '=', 'users.id')->select(['customer_groups.user_id','users.name'])->get();
        return $customer_groups;
        return view('groups/managegeoups',['customer_groups'=>$customer_groups,'authprofile'=>$authprofile]);
      }

      public function creategroup(){
        $id =Auth::user()->id;
        $authprofile = DB::table('users')->where(['id'=>$id])->first();
        $users = DB::table('users')->where([['user_type','=', '1'],['group_status','=', '0']])->get();
        $customers = Customer::whereGroupStatus(0)->get();
        return view('groups/creategroup',['users'=>$users,'customers'=>$customers,'authprofile'=>$authprofile]);
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
      
        
    }


}
