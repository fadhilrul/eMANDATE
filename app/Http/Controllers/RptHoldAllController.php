<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\HoldallExport;
use App\Models\EMANDATE_INFO;
use Maatwebsite\Excel\Facades\Excel;


class RptHoldAllController extends Controller
{
    public function index()
    {     
            return view('pages.reportholdall');
    }

    public function show($id)
    {
        
         return view('pages.reportholdall', compact('id'));

    }

    public function export(Request $request) 
    {
        return Excel::download(new HoldallExport($request->id), 'DataSekatan.xlsx');
    } 

}
