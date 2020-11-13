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
}
