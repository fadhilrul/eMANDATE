<?php

namespace App\Http\Livewire;

use App\Models\EMANDATE_ENRP;
use Livewire\Component;
use Livewire\WithPagination;
use App\User;

class SearchEnrp extends Component
{

    use WithPagination;

    public $searchlistenrp = '';
    public $message = 'a';
   
    public function render()
    {

        $searchlistenrp =  "%".$this->searchlistenrp."%";

        // $a = EMANDATE_ENRP::where('filename','like', $searchlistenrp)->groupBy('filename')->get();
       // dd($a);

        //$file_ENRP = EMANDATE_ENRP::distinct()-> get(['filename']);
        return view('livewire.search-enrp',[

            
            //'file_ENRP' => EMANDATE_ENRP::where('filename','like', $searchlistenrp)->paginate(10)
            //'file_ENRP' => EMANDATE_ENRP::distinct('filename')->where('filename','like', $searchlistenrp)->get(),
            'file_ENRP' => EMANDATE_ENRP::select('filename')->where('filename','like', $searchlistenrp)->groupBy('filename')->get()
            
        ]);


    }
}

