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
        $now = Carbon::now();
        $currentdate = Carbon::parse($now)->format('Y-m-d');
        return view('attendence/dailyatendence',['authprofile'=>$authprofile,'currentdate'=>$currentdate]);
      }




      public function monthlyattendence(){
        $id =Auth::user()->id;
        $authprofile = DB::table('users')->where(['id'=>$id])->first();
        $users = DB::table('users')->where('user_type', 1)->get();
        $monthlyattendence = DB::table('attendences')
            ->join('users', 'attendences.user_id', '=', 'users.id')
            ->select('users.name','users.profile_pic', 'attendences.date', 'attendences.intime', 'attendences.outtime', 'attendences.duration')
            ->whereYear('date', '=', '2020')->whereMonth('date', '=', '5')->where('user_id', '=', '2')
            ->get();
        // return $monthlyattendence;
        return view('attendence/monthlyattendence',['authprofile'=>$authprofile,'users'=>$users,'monthlyattendence'=>$monthlyattendence]);
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
        $statustwo ="Null";


        $data = DB::table('attendences')->where(['user_id' => $id , 'date' => $date])->select('intime')->first();
        $intime = $data->intime;


        $startTime = Carbon::parse($intime);
        $finishTime = Carbon::parse($outtime);
        $totalDuration = $finishTime->diffInSeconds($startTime);
        $duration =  gmdate('H:i:s', $totalDuration);

        if($totalDuration<10600){
          $statustwo = "Leave"; 
        }
        else if($totalDuration<21600){
          $statustwo = "Half Day"; 
        }
        else if($totalDuration>21600){
          $statustwo = "Full Day"; 
        }else{
          $statustwo ="Null";
        }

        
 
        $update = DB::table('attendences')
            ->where(['user_id' => $id , 'date' => $date])
            ->update(['status' => false ,'outtime' => $outtime ,'duration' => $duration ,'statustwo' => $statustwo ]);
            return $update;


      }


      public function calcduration(Request $request){
        $date = Carbon::createFromFormat('d/m/Y', '21/05/2020')->toDateString();
        // $timestamp = strtotime("21/05/2020");


        // $date = date('04/05/2020');
        // $outtime = strtotime('09:20:20');
        // $data = DB::table('attendences')->where(['date'=>$date])->select('intime')->first();
        // $intime = strtotime($data->intime);
        // $calc = $intime - $outtime;


        return $date;
      }



      public function attendencejs(Request $request){
        $id =Auth::user()->id;
        $date=$request->date;

        $attendence = DB::table('attendences')
            ->join('users', 'attendences.user_id', '=', 'users.id')
            ->select('attendences.id','users.name','attendences.date','attendences.intime','attendences.status','attendences.outtime','attendences.duration','attendences.statustwo')
            ->where('date', $date)
            ->get();

        return json_encode($attendence);
      }

      public function monthlyattendencejs(Request $request){
        
        $year=$request->year;
        $month=$request->month;
        $user=$request->user;

        $monthlyattendence = DB::table('attendences')
            ->join('users', 'attendences.user_id', '=', 'users.id')
            ->select('users.name', 'attendences.date', 'attendences.intime', 'attendences.outtime', 'attendences.duration', 'attendences.date','attendences.statustwo')
            ->whereYear('date', '=', $year)->whereMonth('date', '=', $month)->where('user_id', '=', $user)
            ->orderby('date')
            ->get();
        return json_encode($monthlyattendence);
      }


    


}
