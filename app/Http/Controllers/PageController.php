<?php

namespace App\Http\Controllers;
use App\Positive;
use Illuminate\Http\Request;

use App\Helpservice;
use App\Quarantine;
use App\Comfirmed;

use App\Deceased;
use App\Recovered;


use App\City;

class PageController extends Controller
{
    //
    public function mainfun($value='')
    {
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
    

    public function contactfun(Request $request)
    {
    	
    	
        $city_id = $request->city_id;
        $helpservices=Helpservice::all();
        $quarantines=Quarantine::all();
        $cities=City::all();
        
         return view('contact',compact('helpservices','cities','quarantines'));
        
    }

    public function newsfun(Request $request)
    {
        

         $date= $request->date;
         $positives=Positive::all();
        // $cities=City::all();
        $positives = Positive::where('date',$date)->get();
         // return view('contact',compact('helpservices','cities'));



       
        return view('news',compact('positives'));
        // return view('news');
    }
     public function detailfun($value='')
    {
        # code...
        return view('details');
    }

     public function searchhelp(Request $request){
       $help = Helpservice::where('city_id',$request->city)->get();
       return response()->json(['help'=>$help]);
    }

    public function searchquarant(Request $request)
    {
        
       $quarant = Quarantine::where('city_id',$request->city)->get();
       return response()->json(['quarant'=>$quarant]);

    }
}
