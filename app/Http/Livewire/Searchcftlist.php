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

    public function render()
    {
    
        $listcft =  "%".$this->listcft."%";

         return view('livewire.searchcftlist',[

            'filelist_CFT' => EMANDATE_CFT::where('accno','like', $listcft)->orwhere('ic','like', $listcft)->where('hdate','like', $listcft)->paginate(10)
            //'filelist_CFT' => EMANDATE_CFT::where('filename', $listcft)->paginate('10')
                  
        ]);
    }
}



