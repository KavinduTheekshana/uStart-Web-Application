<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cornford\Googlmapper\Facades\MapperFacade;
use Illuminate\Support\Facades\Route;
use Mapper;
use DB;


class LocationController extends Controller
{
    public function addlocation(){
        Mapper::map(
            6.9271,
            79.8612,
            [
                'zoom'=>16,
                'draggable' => true,
                'marker' => true,
                'eventDrag' => 'initAutocomplete(map)' 
            ]
            );
        $customers = DB::table('users')->where(['location_status'=>0,'user_type'=>'2'])->get(); 
        return view('locations/addlocation',['customers'=>$customers]);
      }
}
