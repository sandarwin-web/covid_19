<?php

namespace App\Http\Controllers;

use App\Helpservice;
use Illuminate\Http\Request;
use App\City;

class HelpserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $helpservices=Helpservice::all();

         // dd($helpservices);
          return view('backend.helpservice.index',compact('helpservices'));
        
        // return view('backend.city.index',compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        $helpservices = Helpservice::all();
       
        return view('backend.helpservice.create',compact('cities','helpservices'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => 'required',
            "address"  => 'required',
             "time"  => 'required',
              "opening_day"  => 'required',
               "contact"  => 'required',
               "city_id"  => 'required',
        ]);
         $helpservice = new Helpservice;
        
        $helpservice->name= $request->name;
         $helpservice->address= $request->address;
          $helpservice->time= $request->time;
           $helpservice->opening_day= $request->opening_day; 
            $helpservice->contact= $request->contact;
             $helpservice->city_id= $request->city_id;

        // $brand->photo= $path;
        $helpservice->save();
        //redirect
        return redirect()->route('helpservices.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Helpservice  $helpservice
     * @return \Illuminate\Http\Response
     */
    public function show(Helpservice $helpservice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Helpservice  $helpservice
     * @return \Illuminate\Http\Response
     */
    public function edit(Helpservice $helpservice)
    {
        // $helpservice = Helpservice::all();
        $cities = City::all();

        return view('backend.helpservice.edit',compact('cities','helpservice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Helpservice  $helpservice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Helpservice $helpservice)
    {
        $request->validate([
            
            "name" => 'required',
            "address"  => 'required',
             "time"  => 'required',
              "opening_day"  => 'required',
               "contact"  => 'required',
               "city_id"  => 'required'


            
        ]);


        
        $helpservice->name= $request->name;
        $helpservice->address= $request->address;
        $helpservice->time= $request->time;
        $helpservice->opening_day= $request->opening_day; 
        $helpservice->contact= $request->contact;
        $helpservice->city_id= $request->city_id;
        $helpservice->save();

        return redirect()->route('helpservices.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Helpservice  $helpservice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Helpservice $helpservice)
    {
        $helpservice->delete();

        return redirect()->route('helpservices.index');
    }
}
