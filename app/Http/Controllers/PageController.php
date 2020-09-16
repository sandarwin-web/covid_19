<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comfirmed;
use App\City;
class PageController extends Controller
{
    //
    public function mainfun($value='')
    {
       // $con = Comfirmed::confirmed('qty')
       //  dd(count($con));
    	return view('main');
    }

    //
    public function aboutfun($value='')
    {
    	# code...
    	return view('about');
    }

    public function preventionfun($value='')
    {
    	# code...
    	return view('prevention');
    }

    public function contactfun($value='')
    {
    	# code...
    	return view('contact');
    }
}
