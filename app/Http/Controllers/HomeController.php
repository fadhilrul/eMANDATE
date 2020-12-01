<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EMANDATE_ENRP;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
           // $rpt_enrp = EMANDATE_ENRP::whereApproval('00')->paginate(10);   
            return view('pages.homedashboard');
    }


    public function show($id)
    {
        // return view('pages.reportenrp', compact('id'));
    }
    
    
   
}
