<?php

namespace App\Http\Controllers;

use App\Positive;
use App\City;
use Illuminate\Http\Request;

class PositiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $positives=Positive::all();
        // dd($positives);
        return view('backend.positives.index',compact('positives'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cities = City::all();
        $positives=Positive::all();
       // dd($quarantines);
        return view('backend.positives.create',compact('positives','cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            
            "age"=>'required',
            "gender"=>'required',
            "address"=>'required',
            "date"=>'required',
            "city_id"=>'required'
        ]);

       //Data insert
        $positive = new Positive;
        $positive->age =$request->age;  
        $positive->gender =$request->gender;
        $positive->address =$request->address;
        $positive->date =$request->date;
        $positive->city_id =$request->city_id;
        $positive->save();

       //redirect 
        return redirect()->route('positives.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Positive  $positive
     * @return \Illuminate\Http\Response
     */
    public function show(Positive $positive)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Positive  $positive
     * @return \Illuminate\Http\Response
     */
    public function edit(Positive $positive)
    {
        //
        $cities = City::all(); 
         
        return view('backend.positives.edit',compact('positive','cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Positive  $positive
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Positive $positive)
    {
        //

        $request->validate([
            
            "age"=>'required',
            "gender"=>'required',
            "address"=>'required',
            "date"=>'required',
            "city_id"=>'required'

        ]);

       //Data insert
        //$quarantine = new Quarantine;
        $positive->age =$request->age;
        $positive->gender =$request->gender;
        $positive->address =$request->address;
        $positive->date =$request->date; 
        $positive->city_id =$request->city_id;
        $positive->save();

       //redirect 
        return redirect()->route('positives.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Positive  $positive
     * @return \Illuminate\Http\Response
     */
    public function destroy(Positive $positive)
    {
        //
         $positive->delete();

        return redirect()->route('positives.index');
    }
}
