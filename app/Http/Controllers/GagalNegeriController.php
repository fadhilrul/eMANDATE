<?php

namespace App\Http\Controllers;

use App\Models\EMANDATE_ENRP;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GagalNegeriController extends Controller
{
    public function index()
    {
        $state_user = session('authenticatedUser')['state_code'];
       // $gagalCount= EMANDATE_ENRP::where('section','BLOCK2')->get();  

        $gagalJhr = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '01')
        ->where('section','BLOCK1')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.FILENAME')
        ->get();

        $gagalKdh = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '02')
        ->where('section','BLOCK1')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.FILENAME')
        ->get();

        $gagalKltn = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '03')
        ->where('section','BLOCK1')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.FILENAME')
        ->get();

        $gagalMlk = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '04')
        ->where('section','BLOCK1')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.FILENAME')
        ->get();

        $gagalN9 = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '05')
        ->where('section','BLOCK1')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.FILENAME')
        ->get();

        $gagalPhg = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '06')
        ->where('section','BLOCK1')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.FILENAME')
        ->get();

        $gagalPrk = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '07')
        ->where('section','BLOCK1')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.FILENAME')
        ->get();

        $gagalPrls = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '08')
        ->where('section','BLOCK1')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.FILENAME')
        ->get();

        $gagalPP = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '09')
        ->where('section','BLOCK1')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.FILENAME')
        ->get();

        $gagalSbh = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '10')
        ->where('section','BLOCK1')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.FILENAME')
        ->get();

        $gagalSrwk = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '11')
        ->where('section','BLOCK1')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.FILENAME')
        ->get();

        $gagalSlngr = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->whereIN('BRANCHES.STATE_CODE', ['12', '16'])
        ->where('section','BLOCK1')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.FILENAME')
        ->get();

        $gagalTrg = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '13')
        ->where('section','BLOCK1')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.FILENAME')
        ->get();

        $gagalKl = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '14')
        ->where('section','BLOCK1')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.FILENAME')
        ->get();


        return view('pages.listgagalnegeri',
            compact('gagalJhr', 'gagalKdh', 'gagalKltn', 'gagalMlk',
                     'gagalN9', 'gagalPhg', 'gagalPrk', 'gagalPrls', 'gagalPP', 'gagalSbh',
                     'gagalSrwk', 'gagalSlngr', 'gagalTrg', 'gagalKl' )  );
    }

}
