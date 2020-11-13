<?php

namespace App\Http\Livewire;

use App\Models\EMANDATE_RES;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Rptrespass extends Component
{
    
    use WithPagination;
    public $findrptrespass = '';
    public $idrptrespass;

    public function mount($id)
    {
        $this->idrptrespass = $id;
    }

    public function render()
    {
        $findrptrespass =  "%".$this->findrptrespass."%";
        $idrptrespasss =  "%".$this->idrptrespass."%";

        return view('livewire.rptrespass',[

       'rptdetails_respass' => EMANDATE_RES::where('filename','like', $idrptrespasss)
                            ->where('filler','like', $findrptrespass)
                            ->where('status','=', '00')
                            ->paginate(10)        

         ]);  

     }
 
 }                   

