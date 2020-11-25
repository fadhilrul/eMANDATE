<?php

namespace App\Http\Livewire;

use App\Models\EMANDATE_ENRP;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Search extends Component
{
    use WithPagination;

    public $searchTerm = '';
    public $message = 'a';
    
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        $state_user = session('authenticatedUser')['state_code'];
        //dd($state_user);
        
        if ( $state_user == 00)
        {
            return view('livewire.search',[
               /* 'EMANDATE_ENRP' => EMANDATE_ENRP::where('idnum','like', $searchTerm)
                                ->orwhere('payrefnum','like', $searchTerm)
                                ->paginate(10) */

                'EMANDATE_ENRP' =>  EMANDATE_ENRP::where(function($query) use ($searchTerm) {
                                    $query->where('payrefnum', 'like', $searchTerm)
                                          ->orWhere('idnum', 'like', $searchTerm); })
                                         ->paginate(10) 
            ]);
        }
        else{
            
            return view('livewire.search',[
              /*  'EMANDATE_ENRP' => EMANDATE_ENRP::where('payrefnum','like', $searchTerm)
                                ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
                                ->join ('BRANCHES', 'BRANCHES.BRANCH_CODE', '=', 'ACCOUNT_MASTER.BRANCH_CODE')
                                ->where('BRANCHES.STATE_CODE' , '=',  $state_user )
                                //->orwhere('payrefnum','like', $searchTerm)
                                ->paginate(10) */

                    'EMANDATE_ENRP' => EMANDATE_ENRP:: where(function($query) use ($searchTerm){
                                    $query->where('payrefnum', 'like', $searchTerm)
                                          ->orWhere('idnum', 'like', $searchTerm); })
                                    ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
                                    ->join ('BRANCHES', 'BRANCHES.BRANCH_CODE', '=', 'ACCOUNT_MASTER.BRANCH_CODE')
                                    ->where('BRANCHES.STATE_CODE' , '=',  $state_user )
                                    ->paginate(10) 
                                
            ]);
        }        

    }
}