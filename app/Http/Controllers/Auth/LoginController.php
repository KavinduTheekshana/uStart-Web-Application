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
                // echo Hash::check('plain-text', $request->password);
                if($user->password==Hash::check($request->password, $user->password)){
                    if ($user->user_type==1) {
                        $JsonArray['code']='1';
                        $JsonArray['user']=$user;
                        $JsonArray['msg']='Welcome sels rep';
                    } else if($user->user_type==2){
                        $JsonArray['code']='2';
                        $JsonArray['user']=$user;
                        $JsonArray['msg']='Welcome customer';
                    }else{
                        $JsonArray['msg']='Your Blocked';
                        $JsonArray['code']='3';
                    }
                }else{
                    $JsonArray['msg']='Password Incorrect';
                    $JsonArray['code']='0';
                }
            
            } else{
                $JsonArray['msg']='Not found use by that username';
                $JsonArray['code']='0';
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
        }

        return json_encode($JsonArray);
    }
}
