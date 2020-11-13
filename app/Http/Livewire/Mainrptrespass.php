<?php

namespace App\Http\Livewire;

use App\Models\EMANDATE_RES;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Mainrptrespass extends Component
{
    use WithPagination;
    public $findmainrptrespass = '';

    public function render()
    {
        $findmainrptrespass =  "%".$this->findmainrptrespass."%";

        return view('livewire.mainrptrespass',[

         'rpt_respass' => DB::table('EMANDATE_RES')
                     ->select(DB::raw('filename, hdate, count(*) as bil'))
                     ->where('hdate', 'like', $findmainrptrespass)
                     ->where('status', 'like' , '%00%')
                     ->groupBy('filename', 'hdate')
                     ->orderBy('filename')
                     ->get() 
                     
        ]);

    }
}
