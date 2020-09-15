<?php

namespace App\Http\Controllers;

use App\Comfirmed;
use App\City;
use Illuminate\Http\Request;

class ComfirmedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comfirmeds=Comfirmed::all();

         // dd($comfirmeds);
         return view('backend.comfirmed.index',compact('comfirmeds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    $cities = City::all();
    $comfirmeds = Comfirmed::all();
       
        return view('backend.comfirmed.create',compact('cities','comfirmeds'));
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
         $comfirmed = new Comfirmed;
        
        $comfirmed->date= $request->date;
        $comfirmed->qty= $request->qty;
        $comfirmed->city_id= $request->city_id;

        // $brand->photo= $path;
        $comfirmed->save();
        //redirect
        return redirect()->route('recovereds.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comfirmed  $comfirmed
     * @return \Illuminate\Http\Response
     */
    public function show(Comfirmed $comfirmed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comfirmed  $comfirmed
     * @return \Illuminate\Http\Response
     */
    public function edit(Comfirmed $comfirmed)
    {
         $cities = City::all();

        return view('backend.comfirmed.edit',compact('cities','comfirmed'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comfirmed  $comfirmed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comfirmed $comfirmed)
    {
        $request->validate([
            
            "date" => 'required',
            "qty"  => 'required',
            "city_id"  => 'required'


            
        ]);


        
        $comfirmed->date= $request->date;
        $comfirmed->qty= $request->qty;
        $comfirmed->city_id= $request->city_id;
        $comfirmed->save();

        return redirect()->route('comfirmeds.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comfirmed  $comfirmed
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comfirmed $comfirmed)
    {
        $comfirmed->delete();

        return redirect()->route('comfirmeds.index');
    }
}
