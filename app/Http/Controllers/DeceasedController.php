<?php

namespace App\Http\Controllers;

use App\Deceased;
use App\City;
use Illuminate\Http\Request;

class DeceasedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
          $deceaseds = deceased::all();
       //dd($deceaseds);
        return view('backend.deceased.index',compact('deceaseds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities =city::all();
        //$subcategories =Subcategory::all();
        return view('backend.deceased.create',compact('cities'));
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
            "qty" => 'required',
            "city_id" => 'required'
             ]);
         
        //data insert
        $deceased = new Deceased;
       // $brand->codeno = $request->codeno;
        $deceased->date = $request->date;
        $deceased->qty = $request->qty;
        $deceased->city_id = $request->city_id;
        $deceased->save();
         //redirect
           return redirect()->route('deceaseds.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Deceased  $deceased
     * @return \Illuminate\Http\Response
     */
    public function show(Deceased $deceased)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Deceased  $deceased
     * @return \Illuminate\Http\Response
     */
    public function edit(Deceased $deceased)
    {
         $cities =city::all();
        return view('backend.deceased.edit',compact('cities','deceased'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Deceased  $deceased
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deceased $deceased)
    {
         $request->validate([
            
            "date" => 'required',
            "qty" => 'required',
            "city_id" => 'required'
            
             ]);
        
          //$deceased = new Deceased;
       // $brand->codeno = $request->codeno;
        $deceased->date = $request->date;
        $deceased->qty = $request->qty;
        $deceased->city_id = $request->city_id;
        $deceased->save();
         //redirect
        return redirect()->route('deceaseds.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Deceased  $deceased
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deceased $deceased)
    {
         $deceased->delete();

        return redirect()->route('deceaseds.index');
    }
}
