<?php

namespace App\Http\Controllers;

use App\Models\EMANDATE_ENRP;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.dashboard');
    }

    public function dashboard_emandate()
    {   
        $daftarCount = EMANDATE_ENRP::all();  //count daftar
        $lulusCount = EMANDATE_ENRP::where('section','BLOCK2')->get();  //count lulus
        $gagalCount = EMANDATE_ENRP::where('section','BLOCK1')->get();  //count gagal
        // $daftarview = $daftarCount->count();
        // dd($lulusCount);
        return view('pages.dashboard_emandate',compact('daftarCount','lulusCount','gagalCount'));
        // return view('pages.dashboard_emandate');
    }

    //testing sp
    public function sp_info()
    {   
        $procedureName = 'DBO.EMANDATE_INSERT_EMANDATE_INFO';
        $result = DB::executeProcedure($procedureName);
        dd($result);
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
       //
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
