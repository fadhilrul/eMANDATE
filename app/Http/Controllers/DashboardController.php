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

 /*   public function dashboard_emandate()
    {   
        $daftarCount = EMANDATE_ENRP::all();  //count daftar
        $lulusCount = EMANDATE_ENRP::where('section','BLOCK2')->get();  //count lulus
        $gagalCount = EMANDATE_ENRP::where('section','BLOCK1')->get();  //count gagal

        session('authenticatedUser')['state_code'];
        dd(session('authenticatedUser')['state_code']);

        return view('pages.dashboard_emandate',compact('daftarCount','lulusCount','gagalCount'));
        
    } */
    
    /* use if else */
    public function dashboard_emandate(Request $request)
    {

        $state_user = session('authenticatedUser')['state_code'];
        
        if  ($state_user == '00')
        {

            $state = DB::table('EMANDATE_ENRP')->select('section')->distinct()->get()->pluck('section');
            $branch = DB::table('EMANDATE_ENRP')->select('payrefnum')->distinct()->get()->pluck('payrefnum');
            $transdate = DB::table('EMANDATE_ENRP')->select('effdate')->distinct()->get()->pluck('effdate');

            $post = POST::query();

            if ($request->filled('section'))

            $daftarCount = EMANDATE_ENRP::all();  //count daftar
            $lulusCount = EMANDATE_ENRP::where('section','BLOCK2')->get();  //count lulus
            $gagalCount = EMANDATE_ENRP::where('section','BLOCK1')->get();  //count gagal 

            return view('pages.dashboard_emandate',compact('daftarCount','lulusCount','gagalCount'));    
        }


        /* for all except HQ */
        else {
            
            $state_user = session('authenticatedUser')['state_code'];

            //dd($state_user);
        
            $daftarCount = DB::table('EMANDATE_ENRP')
                            ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
                            ->join ('BRANCHES', 'BRANCHES.BRANCH_CODE', '=', 'ACCOUNT_MASTER.BRANCH_CODE')
                            ->where('BRANCHES.STATE_CODE' , '=',  $state_user )
                            ->get();
            //dd($daftarCount);               

            $lulusCount = DB::table('EMANDATE_ENRP')
                            ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
                            ->join ('BRANCHES', 'BRANCHES.BRANCH_CODE', '=', 'ACCOUNT_MASTER.BRANCH_CODE')
                            ->where('BRANCHES.STATE_CODE' , '=',  $state_user )
                            ->where('EMANDATE_ENRP.SECTION', '=', 'BLOCK2' )
                            ->get();

            $gagalCount = DB::table('EMANDATE_ENRP')
                            ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
                            ->join ('BRANCHES', 'BRANCHES.BRANCH_CODE', '=', 'ACCOUNT_MASTER.BRANCH_CODE')
                            ->where('BRANCHES.STATE_CODE' , '=',  $state_user )
                            ->where('EMANDATE_ENRP.SECTION', '=', 'BLOCK1' )
                            ->get();
           
            return view('pages.dashboard_emandate',compact('daftarCount','lulusCount','gagalCount'));  
        }

    }
    /* end if else */



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
