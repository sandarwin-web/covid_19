<?php

namespace App\Http\Controllers;

use App\Recovered;
use App\City;
use Illuminate\Http\Request;

class RecoveredController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recovereds=Recovered::all();

         // dd($recovereds);
         return view('backend.recovered.index',compact('recovereds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
     $cities = City::all();
    $recovereds = Recovered::all();
       
        return view('backend.recovered.create',compact('cities','recovereds'));
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
            "date" => 'required',
            "qty"  => 'required',
            "city_id"  => 'required',
        ]);
         $recovered = new Recovered;
        
        $recovered->date= $request->date;
        $recovered->qty= $request->qty;
        $recovered->city_id= $request->city_id;

        // $brand->photo= $path;
        $recovered->save();
        //redirect
        return redirect()->route('recovereds.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recovered  $recovered
     * @return \Illuminate\Http\Response
     */
    public function show(Recovered $recovered)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recovered  $recovered
     * @return \Illuminate\Http\Response
     */
    public function edit(Recovered $recovered)
    {
        $cities = City::all();

        return view('backend.recovered.edit',compact('cities','recovered'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recovered  $recovered
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recovered $recovered)
    {
        $request->validate([
            
            "date" => 'required',
            "qty"  => 'required',
               "city_id"  => 'required'


            
        ]);


        
        $recovered->date= $request->date;
        $recovered->qty= $request->qty;
        $recovered->city_id= $request->city_id;
        $recovered->save();

        return redirect()->route('recovereds.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recovered  $recovered
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recovered $recovered)
    {
         $recovered->delete();

        return redirect()->route('recovereds.index');
    }
}
