<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comfirmed;
use App\Deceased;
use App\Recovered;

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
    	return view('contact');
    }
}
