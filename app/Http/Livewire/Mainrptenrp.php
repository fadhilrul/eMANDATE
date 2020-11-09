<?php

namespace App\Http\Livewire;

use App\Models\EMANDATE_ENRP;
use Livewire\Component;
use Livewire\WithPagination;
use App\User;
use Illuminate\Support\Facades\DB;

class Mainrptenrp extends Component
{

    use WithPagination;
    public $findmainrptenrp = '';

    public function render()
    {
        $findmainrptenrp =  "%".$this->findmainrptenrp."%";

        return view('livewire.mainrptenrp',[

         'rpt_enrp' => DB::table('EMANDATE_ENRP')
                     ->select(DB::raw('hcrdate, count(*) as bil'))
                     ->where('hcrdate', 'like', $findmainrptenrp)
                     ->where('approval', 'not like' , '%00%')
                     ->groupBy('hcrdate')
                     ->get() 
                     
        ]);

    }
}
