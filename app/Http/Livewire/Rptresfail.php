<?php

namespace App\Http\Livewire;

use App\Models\EMANDATE_RES;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Rptresfail extends Component
{

    use WithPagination;
    public $findrptresfail = '';
    public $idrptresfail;

    public function mount($id)
    {
        $this->idrptresfail = $id;
    }

    public function render()
    {
        $findrptresfail =  "%".$this->findrptresfail."%";
        $idrptresfails =  "%".$this->idrptresfail."%";

        return view('livewire.rptresfail',[

       'rptdetails_resfail' => EMANDATE_RES::where('filename','like', $idrptresfails)
                            ->where('filler','like', $findrptresfail)
                            ->where('status','<>', '00')
                            ->paginate(10)                 
           

        /*'rptdetails_resfail' => DB::table('EMANDATE_RES')
                            ->select(DB::raw('filename, hdate', 'filler', 'ic', 'status', 'tranamt'))
                            ->where('filename', 'like', $idrptresfails)
                            ->where('filler', 'like', $findrptresfail)
                            ->where('status', '<>' , '00')
                            ->paginate(10) */

         
       /* 'rptdetails_resfail' => EMANDATE_RES::join ('EMANDATE_INFO_DESC','RES.STATUS' , '=', 'substr(REF.RE_CODE, 2, 3)')
                               -> where('RES.filename','like', $idrptresfails)
                                ->where('RES.filler','like', $findrptresfail)
                                ->where('RES.status','<>', '00')
                                ->paginate(10) */

        /*$data = DB::table('city')
                            ->join('state', 'state.state_id', '=', 'city.state_id')
                            ->join('country', 'country.country_id', '=', 'state.country_id')
                            ->select('country.country_name', 'state.state_name', 'city.city_name')
                            ->get();
                          return view('join_table', compact('data'));      
*/


        ]);  
    
    }

}
