<?php

namespace App\Exports;

//use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Http\Request;
use App\Models\EMANDATE_RES;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class ResFailExport implements FromQuery,WithHeadings
{
    
    protected $id;
        function __construct($id) {
        $this->idrptresfail = $id;
    }

    public function headings(): array
    {
        /*nama header */
        return [
            'SEQNO',
            'TARIKH TRANSAKSI',
            'NO AKAUN',
            'KAD PENGENALAN',
            'JUMLAH POTONGAN',
            'STATUS',
            'MAKLUMAT STATUS',
        ];
    }

    public function query()
    {

       /*  $state_user = session('authenticatedUser')['state_code'];*/
       $branch_user = session('authenticatedUser')['branch_code'];
       $branch_type = session('authenticatedUser')['branch_type'];

        /* if ( $state_user == 00){ */
        if ( $branch_type == 'HQ'){  
            return  DB::table('EMANDATE_RES')
            ->select('hdate', DB::raw("SUBSTR(EMANDATE_RES.FILLER,1,14)") ,'ic','tranamt','status','approved_desc')
            ->join ('EMANDATE_INFO_DESC', 'EMANDATE_RES.STATUS', '=', DB::raw("SUBSTR(EMANDATE_INFO_DESC.RE_CODE,2,3)"))
            ->where('filename','like', "%".$this->idrptresfail."%")
            ->where('status','<>','00')
            ->orderby('filename');  
        }
        else{
            return  DB::table('EMANDATE_RES')
            ->select('hdate', DB::raw("SUBSTR(EMANDATE_RES.FILLER,1,14)") ,'ic','tranamt','status','approved_desc')
            ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("SUBSTR(EMANDATE_RES.FILLER,1,14)")  )
            ->join ('BRANCHES', 'BRANCHES.BRANCH_CODE', '=', 'ACCOUNT_MASTER.BRANCH_CODE')
            ->join ('EMANDATE_INFO_DESC', 'EMANDATE_RES.STATUS', '=', DB::raw("SUBSTR(EMANDATE_INFO_DESC.RE_CODE,2,3)"))
            ->where('BRANCHES.STATE_CODE' , '=',  $branch_user )
            ->where('filename','like', "%".$this->idrptresfail."%")
            ->where('status','<>','00')
            ->orderby('filename');
        }    
            

    }

}
