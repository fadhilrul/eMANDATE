<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\EMANDATE_INFO;
use Livewire\WithPagination;

class Blockedpayment extends Component
{   
    use WithPagination;
    public $searchTerm = '';

    public function mount()
    {
        //$this->blocked_payment = EMANDATE_INFO::where('BLOCKED_PAYMNT_STATUS', '<>',00)->paginate(10);
    }
    
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.blockedpayment',[
            'blocked_payment'=> EMANDATE_INFO::where('TRANSDATE','like',$searchTerm)->where('BLOCKED_PAYMNT_STATUS', '<>',00)->paginate(10),
        ]);
    }
}
