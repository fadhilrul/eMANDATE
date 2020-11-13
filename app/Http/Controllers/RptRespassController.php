<?php

namespace App\Http\Controllers;

//Carbon::now()->toDateString()
//ob_end_clean(); // this for solve error format excel
//ob_start(); // this for solve error format excel

use Illuminate\Http\Request;
use App\Exports\ResPassExport;
use App\Models\EMANDATE_RES;
use Maatwebsite\Excel\Facades\Excel;

class RptRespassController extends Controller
{
    public function index()
    {     
            return view('pages.reportrespass');
    }

    public function show($id)
    {
        
         return view('pages.reportrespass', compact('id'));

    }

    public function export(Request $request) 
    {
        return Excel::download(new ResPassExport($request->id), 'DataPassbyDate.xlsx');
    }

}
