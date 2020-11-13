<?php

namespace App\Http\Controllers;

//Carbon::now()->toDateString()
//ob_end_clean(); // this for solve error format excel
//ob_start(); // this for solve error format excel

use Illuminate\Http\Request;
use App\Exports\ResFailExport;
use App\Models\EMANDATE_RES;
use Maatwebsite\Excel\Facades\Excel;

class RptRESfailController extends Controller
{
    public function index()
    {     
            return view('pages.reportresfail');
    }

    public function show($id)
    {
        
         return view('pages.reportresfail', compact('id'));

    }

    public function export(Request $request) 
    {
        return Excel::download(new ResFailExport($request->id), 'DataFailbyDate.xlsx');
    }

}
