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
                        

       /* 'rptdetails_resfail' => DB::table('EMANDATE_RES')
                           ->where('filename', 'like', $idrptresfails)
                            ->where('filler', 'like', $findrptresfail)
                            ->where('status', '<>' , '00')
                            ->paginate(10) */ 

         
         /*'rptdetails_resfail' => EMANDATE_RES::join ('EMANDATE_INFO_DESC','RES.STATUS' , '=', 'substr(REF.RE_CODE, 2, 3)')
                               -> where('RES.filename','like', $idrptresfails)
                                ->where('RES.filler','like', $findrptresfail)
                                ->where('RES.status','<>', '00')
                                ->paginate(10) */

                        
        /* 'rptdetails_resfail' => DB::table('EMANDATE_RES')
                           // ->join ('EMANDATE_INFO_DESC', 'EMANDATE_RES.STATUS', '=', 'substr(EMANDATE_INFO_DESC.RE_CODE, 2, 3)') 
                           ->join ('EMANDATE_INFO_DESC', 'EMANDATE_RES.STATUS', '=', 'EMANDATE_INFO_DESC.RE_CODE') 
                           ->where('EMANDATE_RES.filename', 'like',  "'".$idrptresfails."'")
                            ->where('EMANDATE_RES.filler', 'like',  "'".$findrptresfail."'")
                            ->where('EMANDATE_RES.status', '<>' , '00')
                            ->paginate(10)   */    
                            
    
        ]);  
    
    }

}
