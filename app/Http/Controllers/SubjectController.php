<?php

namespace App\Http\Controllers;

use App\Subject;
use App\Career;
use App\Area;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
   
    public function index()
    {
     $subjects=subject::all();
        
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
    public function show(subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(subject $subject)
    {
        //
    }
}
