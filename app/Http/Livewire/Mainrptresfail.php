<?php

namespace App\Http\Livewire;

use App\Models\EMANDATE_RES;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Mainrptresfail extends Component
{
    use WithPagination;
    public $findmainrptresfail = '';

    public function render()
    {
        $findmainrptresfail =  "%".$this->findmainrptresfail."%";
        $state_user = session('authenticatedUser')['state_code'];

        if ( $state_user == 00){

            return view('livewire.mainrptresfail',[

            'rpt_resfail' => DB::table('EMANDATE_RES')
                        ->select(DB::raw('filename, hdate, count(*) as bil'))
                        ->where('hdate', 'like', $findmainrptresfail)
                        ->where('status', 'not like' , '%00%')
                        ->groupBy('filename', 'hdate')
                        ->orderBy('filename')
                        ->get()           
            ]);
        }
        else{
            return view('livewire.mainrptresfail',[

                'rpt_resfail' => DB::table('EMANDATE_RES')
                            ->select(DB::raw('filename, hdate, count(*) as bil'))
                            ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("SUBSTR(EMANDATE_RES.FILLER,1,14)")  )
                            ->join ('BRANCHES', 'BRANCHES.BRANCH_CODE', '=', 'ACCOUNT_MASTER.BRANCH_CODE')
                            ->where('BRANCHES.STATE_CODE' , '=',  $state_user )
                            ->where('hdate', 'like', $findmainrptresfail)
                            ->where('status', 'not like' , '%00%')
                            ->groupBy('filename', 'hdate')
                            ->orderBy('filename')
                            ->get()           
                ]);
        } 

    }
}
