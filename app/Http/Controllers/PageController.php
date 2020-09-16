<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpservice;

class PageController extends Controller
{
    //
    public function mainfun($value='')
    {
    	# code...
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
    public function newsfun($value='')
    {
        # code...
        // $helpservices = Helpservice::All();
        // //dd($helpservice);
        // return view('healthservice',compact('helpservices'));
    }

    public function contactfun($value='')
    {
    	# code...
        $helpservices = Helpservice::All();
        //dd($helpservice);
        return view('contact',compact('helpservices'));
    	//return view('contact');
    }
}
