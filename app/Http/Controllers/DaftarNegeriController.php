<?php

namespace App\Http\Controllers;

use App\Models\EMANDATE_ENRP;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DaftarNegeriController extends Controller
{
    public function index()
    {
        $state_user = session('authenticatedUser')['state_code'];
    
        $daftarJhr = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '01')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.SECTION')
        ->get();

        $daftarKdh = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '02')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.SECTION')
        ->get();

        $daftarKltn = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '03')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.SECTION')
        ->get();

        $daftarMlk = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '04')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.SECTION')
        ->get();

        $daftarN9 = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '05')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.SECTION')
        ->get();

        $daftarPhg = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '06')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.SECTION')
        ->get();

        $daftarPrk = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '07')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.SECTION')
        ->get();

        $daftarPrls = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '08')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.SECTION')
        ->get();

        $daftarPP = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '09')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.SECTION')
        ->get();

        $daftarSbh = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '10')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.SECTION')
        ->get();

        $daftarSrwk = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '11')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.SECTION')
        ->get();

        $daftarSlngr = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->whereIN('BRANCHES.STATE_CODE', ['12', '16'])
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.SECTION')
        ->get();

        $daftarTrg = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '13')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.SECTION')
        ->get();

        $daftarKl = DB::table('EMANDATE_ENRP')
        ->select(DB::raw('EMANDATE_ENRP.PAYREFNUM, count(*) as bil'))
        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
        ->join ('BRANCHES', DB::raw("SUBSTR(ACCOUNT_MASTER.BRANCH_CODE,1,2)"), '=', 'BRANCHES.STATE_CODE')
        ->where('BRANCHES.STATE_CODE' , '=',  '14')
        ->groupBy('EMANDATE_ENRP.PAYREFNUM', 'EMANDATE_ENRP.SECTION')
        ->get();


        return view('pages.listdaftarnegeri',
            compact( 'daftarJhr', 'daftarKdh', 'daftarKltn', 'daftarMlk',
                     'daftarN9', 'daftarPhg', 'daftarPrk', 'daftarPrls', 'daftarPP', 'daftarSbh',
                     'daftarSrwk', 'daftarSlngr', 'daftarTrg', 'daftarKl' )  );
    }


}
