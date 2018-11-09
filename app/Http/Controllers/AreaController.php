<?php

namespace App\Http\Controllers;

use App\area;
use Illuminate\Http\Request;
use Redirect;
use Session;
class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $areas = area::withTrashed() ->get();
        
      return view('auth.dash.areas.index', compact('areas'));
    }


    public function create()
    {
         $areas=area::all();

        return view('auth.dash.areas.create', compact('areas'));
    }


    public function store(Request $request)
    {
         $area = new Area();

        $area->area=$request->area;
        $area->save();


        return redirect()->back()->with('status', 'La area se agrego correctamente ');
    }

    public function show($ida)
    {
  area::withTrashed()
    ->where('ida',$ida)
    ->restore();
    return redirect()->back()->with('status', 'Se restauro correctamente ');
     return view('auth.dash.areas.index', compact('areas'));

    }

    public function edit($ida)
    {
    {
      
       $areas = area::find($ida);  //el $ areas es la variable el segundo cartes es la referencia al modelo es como decir $cartas = a select * from cartas where id == al id que recibes :: esto que es es como el termino es decir lo que esta antes es select  * from cartas y lo que esta despues :: son las condiciones 
        return view('auth.dash.areas.edit')->with('area',$areas);
    }
    }


    public function update(Request $request, $ida )
    {
        $area=area::find($ida);

        $area->area=$request->area;

        if ($area->save()) 
        {
        
            return redirect()->back()->with('status', 'Se guardo corectamente  ');
                    
        }  

    }

    public function destroy($ida)
    {
        area::find($ida)
        ->delete();
             
        return redirect()->back()->with('status', 'Se elimino correctamente ');
         return view('auth.dash.areas.index');
     }
}
