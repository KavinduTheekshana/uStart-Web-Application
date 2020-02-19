<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function addlocation(){
        return view('locations/addlocation');
      }
}
