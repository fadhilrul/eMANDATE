<?php

namespace App\Http\Livewire;

use App\Models\EMANDATE_CFT;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Searchcftlist extends Component
{
    use WithPagination;

    public $listcft = '';
    public $idenrp;

    public function mount($id)
    {
        $this->idenrp = $id;
    }

    public function render()
    {
    
        $listcft =  "%".$this->listcft."%";
        $state_user = session('authenticatedUser')['state_code'];
        //dd($state_user);

        if ( $state_user == 00)
        { 
            return view('livewire.searchcftlist',[

                'filelist_CFT' => EMANDATE_CFT::where('filename','=', $this->idenrp)
                                            ->where('accno','like', $listcft)
                                            ->paginate(10)
                    
            ]);
        }
        else{
            return view('livewire.searchcftlist',[

                'filelist_CFT' => EMANDATE_CFT::where('filename','=', $this->idenrp)
                                            ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_CFT.PAYREFNO)")  )
                                            ->join ('BRANCHES', 'BRANCHES.BRANCH_CODE', '=', 'ACCOUNT_MASTER.BRANCH_CODE')
                                            ->where('BRANCHES.STATE_CODE' , '=',  $state_user )
                                            ->where('accno','like', $listcft)
                                            ->paginate(10)
                    
            ]);

        }       


    }
}



