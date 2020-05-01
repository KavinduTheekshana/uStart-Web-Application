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

        $info = DB::table('customer_groups')
      ->join('users as cus', 'customer_groups.customer_id', '=', 'cus.id')
      ->join('users as sels', 'customer_groups.user_id', '=', 'sels.id')
      ->select('sels.id as selsid','sels.name as selsname','sels.profile_pic as selsprofilepic',
      'cus.name as cusname','cus.profile_pic as cusprofilepic')->get()->groupBy(['selsname','selsprofilepic']);
        
        // $CustomerGroupsArray=[];
        // $customer_groups = DB::table('customer_groups')->join('users', 'customer_groups.customer_id', '=', 'users.id')->groupBy('customer_groups.user_id')->get();
        // $CustomerGroupsArray['users'] = DB::table('customer_groups')
        // ->leftJoin('users', 'customer_groups.customer_id', '=', 'users.id')->get();
        // return $CustomerGroupsArray;

        return view('groups/managegeoups',['authprofile'=>$authprofile,'info'=>$info]);
      }

      public function creategroup(){
        $id =Auth::user()->id;
        $authprofile = DB::table('users')->where(['id'=>$id])->first();
        $users = DB::table('users')->where([['user_type','=', '1']])->get();
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


    public function RepGetCustomers(Request $request){
      $repid = utf8_decode($request->repid);

      $customerDate = DB::table('customer_groups')
            ->join('users', 'customer_groups.customer_id', '=', 'users.id')
            ->join('customer_locations', 'customer_groups.customer_id', '=', 'customer_locations.customer_id')
            ->where('customer_groups.user_id', $repid)
            ->select('users.id as id','users.name as name',
            'users.address as address','users.shop_name as shopname','users.email as email',
            'users.telephone as telephone','users.province as province',
            'users.district as district','users.city as city',
            'users.joined_date as joined_date','users.profile_pic as profile_pic',
            'customer_locations.address as gooogleaddress','customer_locations.lat as lat','customer_locations.lng as lng')
            ->get();

      return $customerDate;
    }

    public function group(){
      // $info = DB::table('customer_groups')
      // ->join('users as cus', 'customer_groups.customer_id', '=', 'cus.id')
      // ->join('users as sels', 'customer_groups.user_id', '=', 'sels.id')
      // ->select('sels.id as selsid','sels.name as selsname','sels.profile_pic as selsprofilepic',
      // 'cus.name as cusname','cus.profile_pic as cusprofilepic')->get()->groupBy(['selsid']);

      $info = DB::table('customer_groups')
      ->join('users as cus', 'customer_groups.customer_id', '=', 'cus.id')
      ->join('users as sels', 'customer_groups.user_id', '=', 'sels.id')
      ->select('customer_groups.id as id','sels.id as selsid','sels.name as selsname','sels.profile_pic as selsprofilepic',
      'cus.name as cusname','cus.profile_pic as cusprofilepic',
      'cus.city as cuscity','cus.status as cusstatus')->orderby('selsid')->get();


      return $info;
    }


    public function grouplist(){  
      $id =Auth::user()->id;
      $authprofile = DB::table('users')->where(['id'=>$id])->first();

      $info = DB::table('customer_groups')
      ->join('users as cus', 'customer_groups.customer_id', '=', 'cus.id')
      ->join('users as sels', 'customer_groups.user_id', '=', 'sels.id')
      ->select('customer_groups.id as id','sels.id as selsid','sels.name as selsname','sels.profile_pic as selsprofilepic',
      'cus.name as cusname','cus.profile_pic as cusprofilepic',
      'cus.city as cuscity','cus.status as cusstatus')->orderby('selsid')->get();
      

      return view('groups/grouplist',['authprofile'=>$authprofile,'info'=>$info]);
    }

    public function deletecustomergroup($id){
      

      $cusid = DB::table('customer_groups')->where('id', $id)->select('customer_id')->first();

      DB::table('users')
              ->where('id', $cusid->customer_id)
              ->update(['group_status' => false]);
              DB::table('customer_groups')->where('id', $id)->delete();
      return redirect()->back();
    }

}
