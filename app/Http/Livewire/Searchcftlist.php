<?php

namespace App\Http\Livewire;

use App\Models\EMANDATE_CFT;
use Livewire\Component;
use Livewire\WithPagination;
use App\User;

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

         return view('livewire.searchcftlist',[

            'filelist_CFT' => EMANDATE_CFT::where('filename','=', $this->idenrp)
                                        ->where('accno','like', $listcft)
                                        ->paginate(10)
            //'filelist_CFT' => EMANDATE_CFT::where('filename', $listcft)->paginate('10')
                  
        ]);
    }
}



