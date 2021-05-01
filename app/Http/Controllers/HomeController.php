<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RakibDevs\Weather\Weather;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index(Request $request){
        $key = $request->key;
       if($key == ""){
           $key = 'dhaka';
       }
        $wt = new Weather();

        $info = $wt->getCurrentByCity($key);    // Get current weather by city name
        //  dd($info);
        $date = Carbon::now();
        return view('welcome',['info'=>$info,"date"=>$date]);
    }
}
