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

        return view('livewire.mainrptholdall',[

            'rpt_holdall' => DB::table('EMANDATE_INFO')
                        ->select(DB::raw('blockpayment_date, count(*) as bil'))
                        ->where('blockpayment_date', 'like', $findmainrptholdall)
                        ->groupBy('blockpayment_date')
                        ->orderBy('blockpayment_date')
                        ->get() 
                        
           ]);


    }

}
