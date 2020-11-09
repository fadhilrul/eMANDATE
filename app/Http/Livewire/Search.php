<?php

namespace App\Http\Livewire;

use App\Models\EMANDATE_ENRP;
use Livewire\Component;
use Livewire\WithPagination;

class Search extends Component
{
    use WithPagination;

    public $searchTerm = '';
    public $message = 'a';

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';

        return view('livewire.search',[
            'EMANDATE_ENRP' => EMANDATE_ENRP::where('idnum','like', $searchTerm)->orwhere('payrefnum','like', $searchTerm)->paginate(10)
        ]);
    }
}