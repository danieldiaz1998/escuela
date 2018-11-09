<?php

namespace App\Http\Controllers;

use App\Subject;
use App\Career;
use App\Area;
use Illuminate\Http\Request;
use Redirect;
use Session;

class SubjectController extends Controller
{
   
    public function index()
    {
     $subjects=subject::withTrashed() ->get();
        
      return view('auth.dash.subjects.index', compact('subjects'));
    }

    
    public function create()
    {
         $subjects=subject::all();
         $careers=career::pluck('name','idc');
          $areas=area::pluck('area','ida');
        
      return view('auth.dash.subjects.create', compact('subjects','careers','areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $subject = new Subject();

        $subject->subject=$request->subject;
        $subject->active=$request->active;
        $subject->academy=$request->academy;
        $subject->idc=$request->idc;
        $subject->ida=$request->ida;
        $subject->save();


        return redirect()->back()->with('status', 'La carrera se agrego correctamente ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show($ids)
    {
     subject::withTrashed()
    ->where('ids',$ids)
    ->restore();
    return redirect()->back()->with('status', 'Se restauro correctamente ');
     return view('auth.dash.subjects.index', compact('subjects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit($ids)
    {
     $subjects = subject::find($ids);
             $careers=career::pluck('name','idc');
          $areas=area::pluck('area','ida');
    return view('auth.dash.subjects.edit')->with('subject',$subjects)->with('areas',$areas)->with('career',$careers);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$ids)
    {
        $subject=subject::find($ids);
        $subject->subject=$request->subject;
        $subject->active=$request->active;
        $subject->academy=$request->academy;
        $subject->idc=$request->idc;
        $subject->ida=$request->ida;
        $subject->save();


        return redirect()->back()->with('status', 'La carrera se agrego correctamente ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy($ids)
    {
        subject::find($ids)
        ->delete();
             
        return redirect()->back()->with('status', 'Se elimino correctamente ');
         return view('auth.dash.subjects.index');
    }
}
