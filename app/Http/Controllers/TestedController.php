<?php

namespace App\Http\Controllers;

use App\Tested;
use App\City;
use Illuminate\Http\Request;

class TestedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $testeds = tested::all();
       //dd($deceaseds);
        return view('backend.tested.index',compact('testeds'));
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
        return view('backend.tested.create',compact('cities'));
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
        $tested = new Tested;
       // $brand->codeno = $request->codeno;
        $tested->date = $request->date;
        $tested->qty = $request->qty;
        $tested->city_id = $request->city_id;
        $tested->save();
         //redirect
           return redirect()->route('testeds.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tested  $tested
     * @return \Illuminate\Http\Response
     */
    public function show(Tested $tested)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tested  $tested
     * @return \Illuminate\Http\Response
     */
    public function edit(Tested $tested)
    {
        $cities =city::all();
        return view('backend.tested.edit',compact('cities','tested'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tested  $tested
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tested $tested)
    {
        $request->validate([
            
            "date" => 'required',
            "qty" => 'required',
            "city_id" => 'required'
            
             ]);
        
          // $tested = new Tested;
       // $brand->codeno = $request->codeno;
        $tested->date = $request->date;
        $tested->qty = $request->qty;
        $tested->city_id = $request->city_id;
        $tested->save();
         //redirect
        return redirect()->route('testeds.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tested  $tested
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tested $tested)
    {
        $tested->delete();

        return redirect()->route('testeds.index');
    }
}
