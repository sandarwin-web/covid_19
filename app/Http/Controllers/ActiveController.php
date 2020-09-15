<?php

namespace App\Http\Controllers;

use App\Active;
use App\City;
use Illuminate\Http\Request;

class ActiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $actives=Active::all();
        //dd($actives);
        return view('backend.actives.index',compact('actives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        $actives=Active::all();
       // dd($quarantines);
        return view('backend.actives.create',compact('actives','cities'));
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
            
            "date"=>'required',
            "qty"=>'required',
            "city_id"=>'required'
        ]);

       //Data insert
        $active = new Active;
        $active->date =$request->date;
        $active->qty =$request->qty;
        $active->city_id =$request->city_id;
        $active->save();

       //redirect 
        return redirect()->route('actives.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Active  $active
     * @return \Illuminate\Http\Response
     */
    public function show(Active $active)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Active  $active
     * @return \Illuminate\Http\Response
     */
    public function edit(Active $active)
    {
         $cities = City::all();  
        return view('backend.actives.edit',compact('active','cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Active  $active
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Active $active)
    {
        $request->validate([
            
            "date"=>'required',
            "qty"=>'required',
            "city_id"=>'required'
        ]);

       //Data insert
        //$active = new Active;
        $active->date =$request->date;
        $active->qty =$request->qty;
        $active->city_id =$request->city_id;
        $active->save();

       //redirect 
        return redirect()->route('actives.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Active  $active
     * @return \Illuminate\Http\Response
     */
    public function destroy(Active $active)
    {
        $active->delete();
        return redirect()->route('actives.index');
    }
}
