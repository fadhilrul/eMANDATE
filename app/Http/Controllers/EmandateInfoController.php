<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EMANDATE_INFO;
use App\Models\EMANDATE_CFT;
use App\Models\EMANDATE_RES;
use Livewire\WithPagination;
use App\User;

class EmandateInfoController extends Controller

{
    use WithPagination;

    public $listcft = '';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        

       // $INFOS = EMANDATE_INFO::all();;
         //dd($INFOS);

       // $INFOS = EMANDATE_INFO::where('payrefnum','like','%66011115000785%')->whereApproval('00')->paginate(5);
        //dd($INFOS);
      // return view('pages.EmandateInfo',compact('INFOS'));
       return view('pages.EmandateInfo');  


        //return view('pages.EmandateInfo');  
       
        
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
        //$listcft =  "%".$this->listcft."%";

        $INFOS = EMANDATE_INFO::where('fms_acct_no','like','%'.$id.'%')->whereApproval('00')->paginate(5);
        $filelist_res = EMANDATE_RES::whereRaw("substr(filler,0,14) like '%".$id."%' ORDER BY SUBSTR(HDATE,7,10),SUBSTR(HDATE,4,5),SUBSTR(HDATE,1,2) ASC")->paginate(20);
        //dd($id);

        return view('pages.EmandateInfo',compact('INFOS','filelist_res'));
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

    public function activestatus(Request $request)
    {
    
        $info = EMANDATE_INFO::where('idnum', $request->itemid)->first();

        if ($request->action == 0) {
            
            $info->blocked_paymnt_status = ($request->action == 0) ? 0 : 1 ;
            $info->status_desc = ($request->action == 0) ? 'RE-ACTIVE' : 'ON-HOLD';
            $info->blockedby = session()->get('authenticatedUser')['userid'];
            $info->reasons = ($request->reasons);
            $info->blockpayment_flag = 0;
            $info->FAILEDCOUNT = 0;
            $info->save();
            
        }else{

            $info->blocked_paymnt_status = ($request->action == 0) ? 0 : 1 ;
            $info->status_desc = ($request->action == 0) ? 'RE-ACTIVE' : 'ON-HOLD';
            $info->blockedby = session()->get('authenticatedUser')['userid'];
            $info->reasons = ($request->reasons);
            $info->blockpayment_flag = 3;
            $info->FAILEDCOUNT = 3;
            // $info->blockpayment_date = date('Y-m-d');
            $info->save();

        }
        return back()->with('activestatus', 'Status telah dikemaskini.');
    }
}

