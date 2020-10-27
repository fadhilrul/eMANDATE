<?php

namespace App\Http\Livewire;

use App\Models\EMANDATE_ENRP;
use Livewire\Component;
use Livewire\WithPagination;
use App\User;

class SearchEnrpDetails extends Component
{

    use WithPagination;

    public $listenrp = '';

    public function render()
    {
        $listenrp =  "%".$this->listenrp."%";

         return view('livewire.search-enrp-details',[

            'filelist_ENRP' => EMANDATE_ENRP::where('payrefnum','like', $listenrp)->orwhere('idnum','like', $listenrp)->paginate(10)
                  
        ]);
    }
}
