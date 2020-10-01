<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EMANDATE_ENRP;
class EmandateControllerDetails extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        /* have 2 condition (just for testing later on confirm back) */
        // $NERPS_details = EMANDATE_ENRP::where('payrefnum', '=', '66011115000785      ')
        //                 -> where(function ($query) {
        //                     $query->where('section', '=', 'BLOCK2'); }) -> paginate(5);
        

         return view('pages.ENRPFileListDetails');  //  ,compact('NERPS_details')
        
    }

  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $NERPS = EMANDATE_ENRP::paginate(10);
        // $NERPS = EMANDATE_ENRP::find($id);
        $NERPS_details = EMANDATE_ENRP::where('payrefnum','like','%'.$id.'%')->whereSection('BLOCK2')->paginate(5);

        // dd($NERPS);

        // $NERPS_details = EMANDATE_ENRP::where('payrefnum', '=', $NERPS)->whereOr()
        //                 -> where(function ($query) {
        //                     $query->where('section', '=', 'BLOCK2'); }) -> paginate(5);

        //   dd($NERPS_details);
        
        return view('pages.ENRPFileListDetails',compact('NERPS_details'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

