<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EMANDATE_INFO;
class EmandateReportController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
       return view('pages.reports');
    }

    //listing report
    public function ENRPRpt()
    {   
       return view('pages.reportsmainenrp');
    }

    public function RESRptFail()
    {   
       return view('pages.reportsmainresfail');
    }




}

