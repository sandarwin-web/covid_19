<?php

namespace App\Http\Controllers;
use App\Positive;
use Illuminate\Http\Request;

use App\Helpservice;

use App\Comfirmed;

use App\Deceased;
use App\Recovered;


use App\City;

class PageController extends Controller
{
    //
    public function mainfun($value='')
    {

        
    	// $comfirmeds = Comfirmed::take(1)->orderBy('id','desc')->get();
    	


        // $comfirmeds = Comfirmed::('qty')
        //     ->select('qty', Comfirmed::raw('sum(qty) as sum'))
        //     ->groupBy('city_id')
        //     ->havingRaw('SUM(qty)')
        //     ->get();
             $comfirmeds = Comfirmed::sum('qty');
            $deceaseds = Deceased::sum('qty'); 
            $recovereds = Recovered::sum('qty');
            // dd($comfirmeds);
             
        return view('main',compact('comfirmeds','deceaseds','recovereds'));

       // $con = Comfirmed::confirmed('qty')
       //  dd(count($con));
    	return view('main');

    }

    
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
        $helpservices = Helpservice::All();
        //dd($helpservice);
        return view('contact',compact('helpservices'));
    	//return view('contact');
    }

    public function newsfun($value='')
    {
        # code...
        $positives=Positive::all();
        return view('news',compact('positives'));
        // return view('news');
    }
     public function detailfun($value='')
    {
        # code...
        return view('details');
    }
}
