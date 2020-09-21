<?php

namespace App\Http\Controllers;

use App\Quarantine;
use App\City;
use Illuminate\Http\Request;

class QuarantineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quarantines=Quarantine::all();
       // dd($quarantines);
        return view('backend.quarantines.index',compact('quarantines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        $quarantines=Quarantine::all();
       // dd($quarantines);
        return view('backend.quarantines.create',compact('quarantines','cities'));
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
            
            "name"=>'required',
            "type"=>'required',
            "address"=>'required',
            "contact"=>'required',
            "city_id"=>'required'
        ]);

       //Data insert
        $quarantine = new Quarantine;
        $quarantine->name =$request->name;
        $quarantine->type =$request->type;
        $quarantine->address =$request->address;
        $quarantine->contact =$request->contact;
        $quarantine->city_id =$request->city_id;
        $quarantine->save();

       //redirect 
        return redirect()->route('quarantines.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quarantine  $quarantine
     * @return \Illuminate\Http\Response
     */
    public function show(Quarantine $quarantine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quarantine  $quarantine
     * @return \Illuminate\Http\Response
     */
    public function edit(Quarantine $quarantine)
    {
         $cities = City::all();  
        return view('backend.quarantines.edit',compact('quarantine','cities')); 

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quarantine  $quarantine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quarantine $quarantine)
    {
        $request->validate([
            
            "name"=>'required',
            "type"=>'required',
            "address"=>'required',
            "contact"=>'required'
        ]);

       //Data insert
        //$quarantine = new Quarantine;
        $quarantine->name =$request->name;
        $quarantine->type =$request->type;
        $quarantine->address =$request->address;
        $quarantine->contact =$request->contact;
        $quarantine->save();

       //redirect 
        return redirect()->route('quarantines.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quarantine  $quarantine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quarantine $quarantine)
    {
         $quarantine->delete();

        return redirect()->route('quarantines.index');
    }
}
