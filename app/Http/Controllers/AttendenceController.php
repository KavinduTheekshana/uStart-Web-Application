<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Carbon\Carbon;

class AttendenceController extends Controller
{
    public function dailyatendence(){
        $id =Auth::user()->id;
        $authprofile = DB::table('users')->where(['id'=>$id])->first();
        return view('attendence/dailyatendence',['authprofile'=>$authprofile]);
      }




      public function monthlyattendence(){
        $id =Auth::user()->id;
        $authprofile = DB::table('users')->where(['id'=>$id])->first();
        return view('attendence/monthlyattendence',['authprofile'=>$authprofile]);
      }

      
      public function intime(Request $request){

        $id = $request->uid;
        $date = $request->date;
        $intime = $request->intime;

       DB::table('attendences')->insert(
          ['user_id' => $id, 'date' => $date,'intime' => $intime]);

      }

      public function outtime(Request $request){

        $id = $request->uid;
        $date = $request->date;
        $outtime = $request->outtime;


        $data = DB::table('attendences')->where(['user_id' => $id , 'date' => $date])->select('intime')->first();
        $intime = $data->intime;


        $startTime = Carbon::parse($intime);
        $finishTime = Carbon::parse($outtime);
        $totalDuration = $finishTime->diffInSeconds($startTime);
        $duration =  gmdate('H:i:s', $totalDuration);


        $update = DB::table('attendences')
            ->where(['user_id' => $id , 'date' => $date])
            ->update(['status' => false ,'outtime' => $outtime ,'duration' => $duration ]);
            return $update;


      }


      public function calcduration(Request $request){

        $timestamp = strtotime("13-10-2013 15:00");


        // $date = date('04/05/2020');
        // $outtime = strtotime('09:20:20');
        // $data = DB::table('attendences')->where(['date'=>$date])->select('intime')->first();
        // $intime = strtotime($data->intime);
        // $calc = $intime - $outtime;


        return $timestamp;
      }



}
