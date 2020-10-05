<?php

namespace App\Http\Livewire;

use App\Models\EMANDATE_ENRP;
use Livewire\Component;
use Livewire\WithPagination;
use App\User;

class Search extends Component
{
    use WithPagination;

    public $searchTerm = '';
    public $message = 'a';

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.search',[
            'EMANDATE_ENRP' => EMANDATE_ENRP::where('idnum','like', $searchTerm)->WHERE('section','BLOCK2')->paginate(10)
        ]);
    }
}