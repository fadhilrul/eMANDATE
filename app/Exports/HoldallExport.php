<?php

namespace App\Exports;

use Illuminate\Http\Request;
use App\Models\EMANDATE_INFO;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;

class HoldallExport implements FromQuery,WithHeadings
{
    protected $id;
        function __construct($id) {
        $this->idrptholdall = $id;
    }

    public function headings(): array
    {
        /*nama header */
        return [
            'NO',
            'TARIKH SEKATAN',
            'NO AKAUN',
            'NO IC',
            'RESIT NO',
            'TARIKH AKHIR GAGAL POTONGAN',
            'TARIKH AKHIR BERJAYA POTONGAN',
            'SEKATAN OLEH',
            'STATUS',
    
        ];
    } 

    public function query()
    {
           
        $state_user = session('authenticatedUser')['state_code'];

        if ( $state_user == 00){

            return  DB::table('EMANDATE_INFO')
            ->select('blockpayment_date','fms_acct_no','idnum','recnum','lastfailed_date','lastsuccess_date','blockedby','status_desc')
            ->where('blockpayment_date','like', "%".$this->idrptholdall."%")
            ->where('status_desc','=','ON-HOLD')
            ->orderby('fms_acct_no'); 
        }  
        else{

            return  DB::table('EMANDATE_INFO')
            ->select('blockpayment_date','fms_acct_no','idnum','recnum','lastfailed_date','lastsuccess_date','blockedby','status_desc')
            ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_INFO.FMS_ACCT_NO)")  )
            ->join ('BRANCHES', 'BRANCHES.BRANCH_CODE', '=', 'ACCOUNT_MASTER.BRANCH_CODE')
            ->where('BRANCHES.STATE_CODE' , '=',  $state_user )
            ->where('blockpayment_date','like', "%".$this->idrptholdall."%")
            ->where('status_desc','=','ON-HOLD')
            ->orderby('fms_acct_no'); 
        }                    


    }
     

}
