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
}
