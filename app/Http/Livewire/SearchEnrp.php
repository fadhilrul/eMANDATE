<?php

namespace App\Http\Livewire;

use App\Models\EMANDATE_ENRP;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class SearchEnrp extends Component
{

    use WithPagination;

    public $searchlistenrp = '';
  
    public function render()
    {

        $searchlistenrp =  "%".$this->searchlistenrp."%";
        $state_user = session('authenticatedUser')['state_code'];
        //dd($state_user);

        if ( $state_user == 00){
    
            return view('livewire.search-enrp',[

               /* 'file_ENRP' => DB::table('EMANDATE_ENRP')
                         ->select(DB::raw('filename, hcrdate, count(*) as bil'))
                         ->where('hcrdate', 'like', $searchlistenrp)
                         ->groupBy('filename', 'hcrdate')
                         ->get()
                         */

                'file_ENRP' => DB::table('EMANDATE_ENRP')
                        ->select(DB::raw('EMANDATE_ENRP.filename, EMANDATE_ENRP.hcrdate,BRANCHES.branch_name,BNM_STATECODES.DESCRIPTION, count(*) as bil'))
                        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
                        ->join ('BRANCHES', 'BRANCHES.BRANCH_CODE', '=', 'ACCOUNT_MASTER.BRANCH_CODE')
                        ->join('BNM_STATECODES','BRANCHES.STATE_CODE','=', 'BNM_STATECODES.CODE' )
                        ->where('hcrdate', 'like', $searchlistenrp)
                        ->groupBy('EMANDATE_ENRP.filename', 'EMANDATE_ENRP.hcrdate', 'BNM_STATECODES.DESCRIPTION', 'BRANCHES.branch_name')
                        ->get()
                         
                    
            ]);
        }
        else{
            return view('livewire.search-enrp',[

                'file_ENRP' => DB::table('EMANDATE_ENRP')
                         ->select(DB::raw('filename, hcrdate, count(*) as bil'))
                         ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
                         ->join ('BRANCHES', 'BRANCHES.BRANCH_CODE', '=', 'ACCOUNT_MASTER.BRANCH_CODE')
                         ->where('BRANCHES.STATE_CODE' , '=',  $state_user )
                         ->where('hcrdate', 'like', $searchlistenrp)
                         ->groupBy('filename', 'hcrdate')
                         ->get()
                         
            ]);
        }


    }
}

