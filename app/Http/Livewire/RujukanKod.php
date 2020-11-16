<?php

namespace App\Http\Livewire;

use App\Models\EMANDATE_INFO_DESC;
use Livewire\Component;
use Livewire\WithPagination;

class RujukanKod extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.rujukan-kod',[
            'EMANDATE_INFO_DESC' => EMANDATE_INFO_DESC::all()
        ]);
    }
}