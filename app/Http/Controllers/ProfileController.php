<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\user;
use Hash;

class ProfileController extends Controller
{
    public function profile(){
        $id =Auth::user()->id;
        $authprofile = DB::table('users')->where(['id'=>$id])->first();
        return view('profile',['authprofile'=>$authprofile]);
  }


  public function updateprofile(Request $request){
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
     return redirect()->back()->with('status', 'Profile Update Sucessfully');
  }

  public function updateprofilepicture(Request $request){
    $this->validate($request, [
      'profile_pic' => ['required'],
     ]);


     $users = new user();
     $user_id=$request->input('user_id');
     if ($request->hasFile('profile_pic')) {
        $image = $request->file('profile_pic') ;
        $destinationPath = 'uploads/profile_pic/'; // upload path
        $profile_pic = 'uploads/profile_pic/'. date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profile_pic);
        $users->profile_pic = "$profile_pic";
    }




     $data=array(
      'profile_pic' => $users->profile_pic,
    );
    user::where('id',$user_id)->update($data);
        
     $users->update();
     return redirect()->back()->with('status', 'Profile Picture Update Sucessfully');
  }



  public function changePassword(Request $request){

    if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
        // The passwords matches
        return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
    }

    if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
        //Current password and new password are same
        return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
    }

    $validatedData = $request->validate([
        'current-password' => 'required',
        'new-password' => 'required|string|min:6|confirmed',
    ]);

    //Change Password
    $user = Auth::user();
    $user->password = bcrypt($request->get('new-password'));
    $user->save();

    return redirect()->back()->with("status","Password changed successfully !");

}



}
