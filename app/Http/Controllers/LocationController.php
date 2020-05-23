<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cornford\Googlmapper\Facades\MapperFacade;
use Illuminate\Support\Facades\Route;
use Mapper;
use DB;
use App\user;
use App\CustomerLocation;
use Auth;
use Carbon\Carbon;


class LocationController extends Controller
{
    public function addlocation(){  
        $id =Auth::user()->id;
        $authprofile = DB::table('users')->where(['id'=>$id])->first();
        $customers = DB::table('users')->where(['location_status'=>0,'user_type'=>'2'])->get(); 
        return view('locations/addlocation',['customers'=>$customers,'authprofile'=>$authprofile]);
      }

      public function viewlocation(){
        $id =Auth::user()->id;
        $authprofile = DB::table('users')->where(['id'=>$id])->first();  
        $customerlocations = DB::table('customer_locations')->join('users', 'customer_locations.customer_id', '=', 'users.id')->select('customer_locations.*', 'users.shop_name')->paginate(10);
        return view('locations/viewlocation',['customerlocations'=>$customerlocations,'authprofile'=>$authprofile]);
      }

      public function viewalllocation(){
        $id =Auth::user()->id;
        $authprofile = DB::table('users')->where(['id'=>$id])->first();  
        $customerlocations = DB::table('customer_locations')->join('users', 'customer_locations.customer_id', '=', 'users.id')->select('customer_locations.*', 'users.shop_name')->get();
        return view('locations/viewalllocation',['customerlocations'=>$customerlocations,'authprofile'=>$authprofile]);
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


      public function getlatandlng(Request $request){

        $JsonArray=[];
        $JsonArray=DB::table('customer_locations')->where(['customer_id'=>$request->id])->first();  
  
        return json_encode($JsonArray);
    }


    public function savecurrentlocation(Request $request){
      $JsonArray=[];
      if(isset($request->userid) && isset($request->dateString) && isset($request->timeString) && isset($request->lat) && isset($request->lng)){ 
        $userid = $request->userid;
        $dateString = Carbon::createFromFormat('d/m/Y', $request->dateString)->toDateString();
        $timeString = $request->timeString;
        $lat = $request->lat;
        $lng = $request->lng;


        DB::table('daily_routes')->insert(
          ['user_id' => $userid, 'date' => $dateString,'time' => $timeString,'lat' => $lat,'lng' => $lng,]
      );


      $JsonArray['code']='1';
             
          
        
      }else{
          $JsonArray['code']='0';
      }

      return json_encode($JsonArray);
  }



  public function latlng(){
    $data = DB::table('customer_locations')->select('lat','lng')->get();
    return $data;
  }


}
