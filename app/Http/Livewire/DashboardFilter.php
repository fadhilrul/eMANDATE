<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\EMANDATE_ENRP;
use App\Models\BNM_STATECODES;
use App\Models\BRANCHES;
use Illuminate\Support\Facades\DB;


class DashboardFilter extends Component
{

    public $country;
    public $city;
    public $cities = [];
    
   // public $table = [];

    public function render()
    {
        $post = "";
       if(!empty($this->country)){
           
            //$this->cities = BRANCHES::where('state_code', $this->country)->get();
            $this->cities = DB::table('BRANCHES')
                            ->select('branch_code', 'branch_name')
                            ->where('state_code', $this->country)
                            ->get();

        } 

           $selected_branch = $this->city;
           //dd($selected_branch);

           $daftar = EMANDATE_ENRP::where('BRANCHES.BRANCH_CODE',  $selected_branch)
                ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
                ->join ('BRANCHES', 'BRANCHES.BRANCH_CODE', '=', 'ACCOUNT_MASTER.BRANCH_CODE')
                ->get();

            $lulus = EMANDATE_ENRP::where('BRANCHES.BRANCH_CODE',  $selected_branch)
                ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
                ->join ('BRANCHES', 'BRANCHES.BRANCH_CODE', '=', 'ACCOUNT_MASTER.BRANCH_CODE')
                ->where('EMANDATE_ENRP.SECTION', 'BLOCK2')
                ->get();

            $gagal = EMANDATE_ENRP::where('BRANCHES.BRANCH_CODE',  $selected_branch)
                ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
                ->join ('BRANCHES', 'BRANCHES.BRANCH_CODE', '=', 'ACCOUNT_MASTER.BRANCH_CODE')
                ->where('EMANDATE_ENRP.SECTION', 'BLOCK1')
                ->get();
       

        
        /* code '00' is not malaysian */
        //$countries = BNM_STATECODES::where('code', '<>', '00')->orderBy('description')->get();
        $countries = BNM_STATECODES::orderBy('code')->get();
        

        return view('livewire.dashboard-filter')->with([
            'countries'  => $countries,
            'posts' => $daftar,
            'postspass' => $lulus,
            'postsfail' => $gagal,

                                        
        ]);
               

    }
}
