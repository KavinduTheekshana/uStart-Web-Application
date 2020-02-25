<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cornford\Googlmapper\Facades\MapperFacade;
use Illuminate\Support\Facades\Route;
use Mapper;
use DB;
use App\user;
use App\CustomerLocation;


class LocationController extends Controller
{
    public function addlocation(){  
        $customers = DB::table('users')->where(['location_status'=>0,'user_type'=>'2'])->get(); 
        return view('locations/addlocation',['customers'=>$customers]);
      }

      public function viewlocation(){  
        $customerlocations = DB::table('customer_locations')->join('users', 'customer_locations.customer_id', '=', 'users.id')->select('customer_locations.*', 'users.shop_name')->paginate(10);
        return view('locations/viewlocation',['customerlocations'=>$customerlocations]);
      }

      public function saveshoploaction(Request $request){
        $this->validate($request, [
          'address' => ['required', 'string'],
          'lat' => ['required'],
          'lng' => ['required'],
          'customer_id' => ['required']
         ]);

         $customerlocation = new CustomerLocation();
         $customerlocation->address = $request->input('address'); 
         $customerlocation->customer_id	 = $request->input('customer_id'); 
         $customer_id= $request->input('customer_id');
         $customerlocation->lat = $request->input('lat'); 
         $customerlocation->lng = $request->input('lng'); 
         $customerlocation->save();
         $task=user::find($customer_id);
         $task->location_status=true;
         $task->save();
         return redirect('addlocation')->with('status', 'New Customer Location is Added Sucessfully');
      }
}
