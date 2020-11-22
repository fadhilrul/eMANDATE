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

        $state_user = session('authenticatedUser')['state_code'];

        if ( $state_user == 00){

            return view('livewire.rptresfail',[

            'rptdetails_resfail' => EMANDATE_RES::where('filename','like', $idrptresfails)
                                    ->join ('EMANDATE_INFO_DESC', 'EMANDATE_RES.STATUS', '=', DB::raw("SUBSTR(EMANDATE_INFO_DESC.RE_CODE,2,3)"))
                                    ->where('filler','like', $findrptresfail)
                                    ->where('status','<>', '00')
                                    ->paginate(10)                 
                            
            ]); 
        }
        else{
            return view('livewire.rptresfail',[

                'rptdetails_resfail' => EMANDATE_RES::where('filename','like', $idrptresfails)
                                        ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("SUBSTR(EMANDATE_RES.FILLER,1,14)")  )
                                        ->join ('BRANCHES', 'BRANCHES.BRANCH_CODE', '=', 'ACCOUNT_MASTER.BRANCH_CODE')
                                        ->join ('EMANDATE_INFO_DESC', 'EMANDATE_RES.STATUS', '=', DB::raw("SUBSTR(EMANDATE_INFO_DESC.RE_CODE,2,3)"))
                                        ->where('BRANCHES.STATE_CODE' , '=',  $state_user )
                                        ->where('filler','like', $findrptresfail)
                                        ->where('status','<>', '00')
                                        ->paginate(10)                 
                                
                ]);
        } 
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
                            
    
        
    
    }

}
