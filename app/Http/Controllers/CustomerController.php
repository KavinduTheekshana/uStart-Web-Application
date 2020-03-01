<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Illuminate\Support\Facades\Hash;
use DB;

class CustomerController extends Controller
{
    public function addcutomer(Request $request){
        $this->validate($request, [
          'name' => ['required', 'string', 'max:255'],
          'shop_name' => ['required', 'string', 'max:255'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],       
          'telephone'=>['required','min:10'],
          'password' => ['required', 'string', 'min:6', 'confirmed'],
          'address' => ['string', 'max:255'],
          'province' => [ 'string', 'max:255'],
          'district' => [ 'string', 'max:255'],
         ]);
  
         $users = new user();
         $users->name = $request->input('name');
         $users->shop_name = $request->input('shop_name');
         $users->email = $request->input('email');
         $users->telephone = $request->input('telephone');
         $users->password = Hash::make($request['password']);
         $users->address = $request->input('address');
         $users->province = $request->input('province');
         $users->district = $request->input('district');
         $users->city = $request->input('city');
         $users->joined_date = $request->input('joined_date');
         $users->user_type = '2';
         $users->profile_pic = '/uploads/profile_pic/default.png';    
         $users->save();
         return redirect('addcustomers')->with('status', 'New Customer Added Sucessfully');
      }

      public function managecustomers(){
        $customers = DB::table('users')->where('user_type', '2')->get();  
        return view('customers/managecustomers',['customers'=>$customers]);
      }

      public function editcustomer($id){
        $customers = DB::table('users')->where('id', $id)->first();    
        return view('customers/editcustomers',['customers'=>$customers]);
      }


      public function updatecustomer(Request $request){
        $this->validate($request, [
          'name' => ['required', 'string', 'max:255'],
          'shop_name' => ['required', 'string', 'max:255'],     
          'telephone'=>['required','min:10'],
          'address' => ['string', 'max:255'],
          'province' => [ 'string', 'max:255'],
          'district' => [ 'string', 'max:255'],
         ]);
  
         $users = new user();
         $user_id=$request->input('user_id');
         $users->name = $request->input('name');
         $users->shop_name = $request->input('shop_name');
         $users->telephone = $request->input('telephone');
         $users->address = $request->input('address');
         $users->province = $request->input('province');
         $users->district = $request->input('district');
         $users->city = $request->input('city');
         $users->joined_date = $request->input('joined_date');

         $data=array(
          'name' => $users->name,
          'telephone'=>$users->telephone,
          'address'=>$users->address,
          'province'=> $users->province,
          'district'=> $users->district,
          'city'=> $users->city,
          'joined_date'=> $users->joined_date,
        );
        user::where('id',$user_id)->update($data);     
        $users->update();
        return redirect('managecustomers')->with('status', 'Customer Details Edit Sucessfully');
      
      }


      public function jsonOupt(){
        $customers = DB::table('users')->get();    
        return $customers->toJson();
      }

      public function customer_diactivate($id){
        $task=user::find($id);
        $task->status=false;
        $task->save();
       return redirect()->back()->with('customer_diactivate_status', 'Category Was Diactivated Sucessfully');
      }

      public function customer_activate($id){
        $task=user::find($id);
        $task->status=true;
        $task->save();
       return redirect()->back()->with('customer_activate_status', 'Category Was Activated Sucessfully');
      }
}
