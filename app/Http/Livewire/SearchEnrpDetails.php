<?php

namespace App\Http\Livewire;

use App\Models\EMANDATE_ENRP;
use Livewire\Component;
use Livewire\WithPagination;

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
         
        //$a = EMANDATE_ENRP::where('hcrdate','=', $this->idenrp)->get();
        //dd ($a);

         return view('livewire.search-enrp-details',[

            'filelist_ENRP' => EMANDATE_ENRP::where('hcrdate','=', $this->idenrp)//->paginate(10)
                            ->where('payrefnum','like', $listenrp)
                            ->paginate(10)
        ]);
    }
}
