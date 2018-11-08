<?php

namespace App\Http\Controllers;

use App\Career;
use App\Area;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $careers=career::all();
        
      return view('auth.dash.careers.index', compact('careers'));

    }
    public function create()
    {
        $careers=career::all();
        $areas=area::pluck('area','ida');
       
      return view('auth.dash.careers.create', compact('careers','areas'));
    }

    
    public function store(Request $request)
    {
       $career = new Career();

        $career->name=$request->name;
        $career->active=$request->active;
        $career->ida=$request->ida;
        $career->save();


        return redirect()->back()->with('status', 'La carrera se agrego correctamente ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function show(Career $career)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function edit(Career $career)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Career $career)
    {
      $career=Career::find($id);

        $career->name=$request->name;
           $career->area=$request->area;
        $career->active=$request->active;
               $career->ida=$request->ida;

        if ($career->save()) 
        {
        
            return redirect()->back()->with('status', 'Se guardo corectamente  ');

        }  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function destroy(Career $career)
    {
        $career=Career::find($id);
        if($career->delete())
        {
            return redirect()->back()->with('status','Se elimino la carrera exitosamente');
        }
    }
}
