<?php

namespace App\Http\Livewire;

use App\Models\EMANDATE_ENRP;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Mainrptenrp extends Component
{

    use WithPagination;
    public $findmainrptenrp = '';

    public function render()
    {
        $findmainrptenrp =  "%".$this->findmainrptenrp."%";
        $state_user = session('authenticatedUser')['state_code'];

        if ( $state_user == 00){

            return view('livewire.mainrptenrp',[

            'rpt_enrp' => DB::table('EMANDATE_ENRP')
                        ->select(DB::raw('hcrdate, count(*) as bil'))
                        ->where('hcrdate', 'like', $findmainrptenrp)
                        ->where('approval', 'not like' , '%00%')
                        ->groupBy('hcrdate')
                        ->orderBy('hcrdate')
                        ->get() 
                        
            ]);
        }
        else {
            
            return view('livewire.mainrptenrp',[

                'rpt_enrp' => DB::table('EMANDATE_ENRP')
                            ->select(DB::raw('hcrdate, count(*) as bil'))
                            ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
                            ->join ('BRANCHES', 'BRANCHES.BRANCH_CODE', '=', 'ACCOUNT_MASTER.BRANCH_CODE')
                            ->where('BRANCHES.STATE_CODE' , '=',  $state_user )
                            ->where('hcrdate', 'like', $findmainrptenrp)
                            ->where('approval', 'not like' , '%00%')
                            ->groupBy('hcrdate')
                            ->orderBy('hcrdate')
                            ->get() 
                            
                ]);

        }    

    }
}
