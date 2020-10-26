<?php

namespace App\Http\Livewire;

use App\Models\EMANDATE_CFT;
use Livewire\Component;
use Livewire\WithPagination;
use App\User;


class Search_cft extends Component
{

    use WithPagination;

    public $searchCFTTerm = '';
   

    public function render()
    {

        $searchCFTTerm = ($this->searchCFTTerm != "") ? '' : '%'.$this->searchCFTTerm.'%';

       // $a = EMANDATE_CFT::where('filename','like', $searchCFTTerm)->WHERE('status','99')->paginate(10);
        //dd($a);


        /* use orwhere if want to search more than 1 field */
        return view('livewire.searchcft',[
           
            //'cftdata' => EMANDATE_CFT::where('filename','like', $searchCFTTerm)->orwhere('accno','like', $searchCFTTerm)->paginate(5)
            //'cftdata' => EMANDATE_CFT::where('filename','like', $searchCFTTerm)->paginate(5)
            'cftdata' => EMANDATE_CFT::select('filename')->where('filename','like', $searchCFTTerm)->groupBy('filename')->get()

        ]);
    }
}



 