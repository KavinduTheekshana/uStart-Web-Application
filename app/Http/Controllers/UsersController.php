<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Illuminate\Support\Facades\Hash;
use DB;

class UsersController extends Controller
{
    public function adduser(Request $request){
        $this->validate($request, [
          'name' => ['required', 'string', 'max:255'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],       
          'telephone'=>['required','min:10'],
          'password' => ['required', 'string', 'min:6', 'confirmed'],
          'address' => ['string', 'max:255'],
          'province' => [ 'string', 'max:255'],
          'district' => [ 'string', 'max:255'],
         ]);
  
         $users = new user();
         $users->name = $request->input('name');
         $users->email = $request->input('email');
         $users->telephone = $request->input('telephone');
         $users->password = Hash::make($request['password']);
         $users->address = $request->input('address');
         $users->province = $request->input('province');
         $users->district = $request->input('district');
         $users->city = $request->input('city');
         $users->joined_date = $request->input('joined_date');
         $users->user_type = '1';
         $users->profile_pic = '/uploads/profile_pic/default.png';    
         $users->save();
         return redirect('addusers')->with('status', 'New User Added Sucessfully');
      }


      public function manageusers(){
        $users = DB::table('users')->where('user_type', '1')->get();  
        return view('users/manageusers',['users'=>$users]);
      }

      public function edituser($id){
        $users = DB::table('users')->where('id', $id)->first();  
        
        return view('users/editusers',['users'=>$users]);
      }



      public function updateuser(Request $request){
        $this->validate($request, [
          'user_id' => ['required'],
          'name' => ['required', 'string', 'max:255'],       
          'telephone'=>['required','min:10'],
          'address' => ['string', 'max:255'],
          'province' => [ 'string', 'max:255'],
          'district' => [ 'string', 'max:255'],
         ]);
  
         $users = new user();
         $user_id=$request->input('user_id');
         $users->name = $request->input('name');
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
         return redirect('manageusers')->with('status', 'User Update Sucessfully');
      }


      public function user_diactivate($id){
        $task=user::find($id);
        $task->status=false;
        $task->save();
       return redirect()->back();
      }

      public function user_activate($id){
        $task=user::find($id);
        $task->status=true;
        $task->save();
       return redirect()->back();
      }
  
}
