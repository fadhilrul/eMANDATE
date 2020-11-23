<?php

namespace App\Http\Controllers;

use App\Models\EMANDATE_ENRP;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LulusNegeriController extends Controller
{
    public function index()
    {
        $state_user = session('authenticatedUser')['state_code'];
       // $lulusCount= EMANDATE_ENRP::where('section','BLOCK2')->get();  

        $lulusJhr = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '01')
        ->where('section','BLOCK2')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.FILENAME')
        ->get();

        $lulusKdh = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '02')
        ->where('section','BLOCK2')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.FILENAME')
        ->get();

        $lulusKltn = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '03')
        ->where('section','BLOCK2')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.FILENAME')
        ->get();

        $lulusMlk = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '04')
        ->where('section','BLOCK2')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.FILENAME')
        ->get();

        $lulusN9 = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '05')
        ->where('section','BLOCK2')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.FILENAME')
        ->get();

        $lulusPhg = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '06')
        ->where('section','BLOCK2')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.FILENAME')
        ->get();

        $lulusPrk = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '07')
        ->where('section','BLOCK2')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.FILENAME')
        ->get();

        $lulusPrls = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '08')
        ->where('section','BLOCK2')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.FILENAME')
        ->get();

        $lulusPP = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '09')
        ->where('section','BLOCK2')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.FILENAME')
        ->get();

        $lulusSbh = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '10')
        ->where('section','BLOCK2')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.FILENAME')
        ->get();

        $lulusSrwk = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '11')
        ->where('section','BLOCK2')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.FILENAME')
        ->get();

        $lulusSlngr = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->whereIN('BRANCHES.STATE_CODE', ['12', '16'])
        ->where('section','BLOCK2')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.FILENAME')
        ->get();

        $lulusTrg = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '13')
        ->where('section','BLOCK2')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.FILENAME')
        ->get();

        $lulusKl = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '14')
        ->where('section','BLOCK2')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.FILENAME')
        ->get();


        return view('pages.listlulusnegeri',
            compact('lulusJhr', 'lulusKdh', 'lulusKltn', 'lulusMlk',
                     'lulusN9', 'lulusPhg', 'lulusPrk', 'lulusPrls', 'lulusPP', 'lulusSbh',
                     'lulusSrwk', 'lulusSlngr', 'lulusTrg', 'lulusKl' )  );
    }

}
