<?php

namespace App\Http\Controllers;

ob_end_clean(); // this for solve error format excel
ob_start(); // this for solve error format excel

use Illuminate\Http\Request;
use App\Exports\EnrpExport;
use App\Models\EMANDATE_ENRP;
use Maatwebsite\Excel\Facades\Excel;


class RptENRPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
           // $rpt_enrp = EMANDATE_ENRP::whereApproval('00')->paginate(10);   
            return view('pages.reportenrp');
    }

    public function show($id)
    {
        //dd($id);

        //$test = EMANDATE_ENRP::where($id);
        //$test =EMANDATE_ENRP::where('hcrdate','like','%'.$id.'%') ->where('approval','=','%00%');
        //dd($test);

        //EMANDATE_ENRP::where('hcrdate','=',$id)->whereApproval('00')
        //$rpt_enrp = EMANDATE_ENRP::where('hcrdate','=',$id)
         //   ->where('approval','not like','%00%')->paginate(10);

         return view('pages.reportenrp', compact('id'));
       
    }
    
    public function export(Request $request) 
    {
        return Excel::download(new EnrpExport($request->id), 'EnrpData.xlsx');
    }
   
}
