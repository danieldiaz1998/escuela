<?php

namespace App\Http\Controllers;

use App\area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas=area::all();
        
      return view('auth.dash.areas.index', compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $areas=area::all();

        return view('auth.dash.areas.create', compact('areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $area = new Area();

        $area->area=$request->area;
        $area->save();


        return redirect()->back()->with('status', 'La carrera se agrego correctamente ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\area  $area
     * @return \Illuminate\Http\Response
     */
    public function show(area $ida)
    {
           area::withTrashed()
    ->where('ida',$ida)
    ->restore();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\area  $area
     * @return \Illuminate\Http\Response
     */
    public function edit(area $ida)
    {
               $areas = area::find($ida);//el $ cartas es la variable el segundo cartes es la referencia al modelo es como decir $cartas = a select * from cartas where id == al id que recibes :: esto que es es como el termino es decir lo que esta antes es select  * from cartas y lo que esta despues :: son las condiciones 
        return view('auth.dash.areas.edit',compact('areas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\area  $area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$ida)
    {
                $area=area::find($ida);

      
        $area->area=$request->area;

        if ($area->save()) 
        {
        
            return redirect()->back()->with('status', 'Se guardo corectamente  ');
        }  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\area  $area
     * @return \Illuminate\Http\Response
     */
    public function destroy($ida)
    {
        $areas=Area::find($ida);
        if($areas->delete())
        {
            return redirect()->back()->with('status','se elimino la categoria exitosamente');
        }
     }
}
