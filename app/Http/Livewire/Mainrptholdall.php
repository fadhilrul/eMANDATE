<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\EMANDATE_INFO;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Mainrptholdall extends Component
{
    use WithPagination;
    public $findmainrptholdall = '';
    
    public function render()
    {

        $findmainrptholdall =  "%".$this->findmainrptholdall."%";
        $state_user = session('authenticatedUser')['state_code'];

        if ( $state_user == 00){

            return view('livewire.mainrptholdall',[

                'rpt_holdall' => DB::table('EMANDATE_INFO')
                            ->select(DB::raw('blockpayment_date, count(*) as bil'))
                            ->where('blockpayment_date', 'like', $findmainrptholdall)
                            ->groupBy('blockpayment_date')
                            ->orderBy('blockpayment_date')
                            ->get() 
                            
            ]);
        }
        else{
            return view('livewire.mainrptholdall',[

                'rpt_holdall' => DB::table('EMANDATE_INFO')
                            ->select(DB::raw('blockpayment_date, count(*) as bil'))
                            ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_INFO.FMS_ACCT_NO)")  )
                            ->join ('BRANCHES', 'BRANCHES.BRANCH_CODE', '=', 'ACCOUNT_MASTER.BRANCH_CODE')
                            ->where('BRANCHES.STATE_CODE' , '=',  $state_user )
                            ->where('blockpayment_date', 'like', $findmainrptholdall)
                            ->groupBy('blockpayment_date')
                            ->orderBy('blockpayment_date')
                            ->get() 
                            
            ]);
        }        

    }

}
