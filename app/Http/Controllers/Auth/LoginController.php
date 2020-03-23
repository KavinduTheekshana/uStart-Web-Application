<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Illuminate\Http\Request;
use DB;
use Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function mobileLogin(Request $request){
        $JsonArray=[];
        if(isset($request->username) && isset($request->password) && $request->username!="" &&  $request->password!=""){
            $user = DB::table('users')->where('email','=', $request->username)->first();  
            if($user!=null){
                if($user->password==Hash::check($request->password, $user->password)){
                    if ($user->user_type==1 && $user->status==true) {
                        $JsonArray['code']='1';
                        $JsonArray['user']=$user;
                        $JsonArray['msg']='Welcome sels rep';
                    } else if($user->user_type==2 && $user->status==true){
                        $JsonArray['code']='2';
                        $JsonArray['user']=$user;
                        $JsonArray['msg']='Welcome customer';
                    }else{
                        $JsonArray['code']='3';
                    }
                }else{
                    $JsonArray['code']='0';
                    $JsonArray['msg']='Password Incorrect';      
                }
            
            }else{
                $JsonArray['code']='0';
                $JsonArray['msg']='Not Found Use By That Username';              
            }
        }else{
            $JsonArray['result']='error';
            $JsonArray['code']='0';
        }

        return json_encode($JsonArray);
    }

    public function checkLogin(Request $request){
        $JsonArray=[];
        if(isset($request->id) &&  $request->id!=""){
            $user = DB::table('users')->where('id','=', $request->id)->first();  
            if($user->user_type==1){
                // echo Hash::check('plain-text', $request->password);
                $JsonArray['code']='1';
            
            } else if($user->user_type==2){
                $JsonArray['code']='2';
            } else{
                $JsonArray['msg']='Your Blocked';
                $JsonArray['code']='3';
            }
        }else{
            $JsonArray['code']='0';
            $JsonArray['msg']='Your Blocked';
        }

        return json_encode($JsonArray);
    }





    public function currentPassword(Request $request){
        $JsonArray=[];
        if(isset($request->uid) && isset($request->password) && $request->uid!="" &&  $request->password!=""){
            $user = DB::table('users')->where('id','=', $request->uid)->first();  
            if($user!=null){
                if($user->password==Hash::check($request->password, $user->password)){
                    $JsonArray['code']='1';
                    $JsonArray['msg']='Correct Password';  
                }else{
                    $JsonArray['code']='0';
                    $JsonArray['msg']='Current Password is Incorrect';      
                }
            
            }else{
                $JsonArray['code']='0';
                $JsonArray['msg']='Not Found Use By That Username';              
            }
        }else{
            $JsonArray['result']='error';
            $JsonArray['code']='0';
        }

        return json_encode($JsonArray);
    }


    public function updatePasswordMobile(Request $request){ 
        $userid=utf8_decode($request->uid);
        $password=utf8_decode($request->password);
        $confirm_password=utf8_decode($request->confirm_password);

        $JsonArray=[];
        if(isset($request->password) && isset($request->confirm_password) && $request->password!="" &&  $request->confirm_password!=""){     
            $user = DB::table('users')->where('id','=', $request->uid)->get();  
            if($user!=null){
                if($password == $confirm_password){
                    $hashpassword = Hash::make($password);
                    $data=array(
                        'password' => $hashpassword,
                      );
                      user::where('id',$userid)->update($data);
                      $JsonArray['code']='1';
                      $JsonArray['msg']='Your password has been updated!';
                }else{
                    $JsonArray['code']='0';
                    $JsonArray['msg']='Your password and confirmation password are not match!';
                }
            
            }else{
                              
            }
        }else{
            $JsonArray['code']='0';
            $JsonArray['result']='error';   
        }

        return json_encode($JsonArray);
    }



}
