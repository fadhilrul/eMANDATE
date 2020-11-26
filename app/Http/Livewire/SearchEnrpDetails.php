<?php

namespace App\Http\Livewire;

use App\Models\EMANDATE_ENRP;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class SearchEnrpDetails extends Component
{

    use WithPagination;

    public $listenrp = '';
    public $idenrp;

    public function mount($id)
    {
        $this->idenrp = $id;
    }

    public function render()
    {
        $listenrp =  "%".$this->listenrp."%";
        $state_user = session('authenticatedUser')['state_code'];

        //$a = EMANDATE_ENRP::where('hcrdate','=', $this->idenrp)->get();
        //dd ($a);

        if ( $state_user == 00)
        {    
            return view('livewire.search-enrp-details',[

                /*'filelist_ENRP' => EMANDATE_ENRP::where('hcrdate','=', $this->idenrp)//->paginate(10)
                                ->where('payrefnum','like', $listenrp)
                                ->orwhere('idnum','like', $listenrp)
                                ->paginate(10)  */
                'filelist_ENRP' =>  EMANDATE_ENRP::where(function($query) use ($listenrp) {
                                    $query->where('payrefnum', 'like', $listenrp)
                                          ->orWhere('idnum', 'like', $listenrp); })
                                         -> where('hcrdate','=', $this->idenrp)
                                         ->paginate(10) 
                                    
               ]);  
                         

        }
        else{

            return view('livewire.search-enrp-details',[

              /*  'filelist_ENRP' => EMANDATE_ENRP::where('hcrdate','=', $this->idenrp)//->paginate(10)
                                    ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
                                    ->join ('BRANCHES', 'BRANCHES.BRANCH_CODE', '=', 'ACCOUNT_MASTER.BRANCH_CODE')
                                    ->where('BRANCHES.STATE_CODE' , '=',  $state_user )
                                    ->where('payrefnum','like', $listenrp)
                                   // ->orwhere('idnum','like', $listenrp)
                                    ->paginate(10) */

             'filelist_ENRP' => EMANDATE_ENRP:: where(function($query) use ($listenrp){
                                        $query->where('payrefnum', 'like', $listenrp)
                                              ->orWhere('idnum', 'like', $listenrp); })
                                        -> where('hcrdate','=', $this->idenrp)//->paginate(10)
                                        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
                                        ->join ('BRANCHES', 'BRANCHES.BRANCH_CODE', '=', 'ACCOUNT_MASTER.BRANCH_CODE')
                                        ->where('BRANCHES.STATE_CODE' , '=',  $state_user )
                                        ->paginate(10) 

            ]);
        }


    }
}
