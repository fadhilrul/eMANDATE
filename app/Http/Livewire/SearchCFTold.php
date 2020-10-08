<?php

namespace App\Http\Livewire;

use App\Models\EMANDATE_CFT;
use Livewire\Component;
use Livewire\WithPagination;
use App\User;

class SearchCFT extends Component
{
    use WithPagination;

    public $searchCFTTerm = '';
    public $message = 'a';

    public function render()
    {
        $searchCFTTerm = '%'.$this->searchCFTTerm.'%';
       $test = EMANDATE_CFT::where('filename','like', $searchCFTTerm)->WHERE('status','99')->paginate(10);
       dd($test);

       

        return view('pages.CFTFileList',[
            'EMANDATE_CFT' => EMANDATE_CFT::where('filename','like', $searchCFTTerm)->WHERE('status','99')->paginate(10)
        ]);
    }
}