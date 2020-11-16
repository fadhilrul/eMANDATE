<?php

namespace App\Http\Controllers;
use App\Exports\KodRujukan;
use Illuminate\Http\Request;
use App\Models\EMANDATE_INFO_DESC;
use Maatwebsite\Excel\Facades\Excel;

class RujukanKodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
         return view('RujukanKod');
    }

    public function export()
    {
        return Excel::download(new KodRujukan, 'KodRujukan.xlsx');
    }
}