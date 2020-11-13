<?php

namespace App\Http\Livewire;

use App\Models\EMANDATE_ENRP;
use Livewire\Component;
use Livewire\WithPagination;

class Rptenrp extends Component
{

    use WithPagination;
    public $findrptenrp = '';
    public $idrptenrp;

    public function mount($id)
    {
        $this->idrptenrp = $id;
    }
 
    public function render()
    {
        $findrptenrp =  "%".$this->findrptenrp."%";

        return view('livewire.rptenrp',[

            'rptdetails_enrp' => EMANDATE_ENRP::where('hcrdate','=', $this->idrptenrp)
                            ->where('payrefnum','like', $findrptenrp)
                            ->where('approval','<>', '00')
                            ->paginate(10)
                  
        ]);  
    
    }



}
