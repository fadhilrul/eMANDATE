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

    //listing blocked payment
    public function BlockedpaymentRpt()
    {   
       return view('pages.reportblockedpaymnt');
    }

}

