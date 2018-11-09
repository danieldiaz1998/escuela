<?php

namespace App\Http\Controllers;

use App\Career;
use App\Area;
use Illuminate\Http\Request;
use Redirect;
use Session;

class CareerController extends Controller
{

    public function index()
    {
      $careers = career::withTrashed() ->get();
        
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


    public function show($idc)
    {
        career::withTrashed()
    ->where('idc',$idc)
    ->restore();
    return redirect()->back()->with('status', 'Se restauro correctamente ');
     return view('auth.dash.careers.index', compact('careers'));
    }

    public function edit($idc)
    {
    $careers = career::find($idc);
    $areas=area::pluck('area','ida');
    return view('auth.dash.careers.edit')->with('career',$careers)->with('areas',$areas);
    }


    public function update(Request $request, $idc)
    {
      $career=Career::find($idc);
        $career->name=$request->name;
        $career->active=$request->active;
        $career->ida=$request->ida;
        $career->save();


        return redirect()->back()->with('status', 'La carrera se agrego correctamente ');
    }

    public function destroy($idc)
    {
         career::find($idc)
        ->delete();
             
        return redirect()->back()->with('status', 'Se elimino correctamente ');
         return view('auth.dash.careers.index');
    }
}
