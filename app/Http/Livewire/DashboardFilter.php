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
        $branch_user = session('authenticatedUser')['branch_code'];
        $branch_type = session('authenticatedUser')['branch_type'];

        if ( $branch_type == 'HQ'){
            
            if(!empty($this->country)){
            
                //$this->cities = BRANCHES::where('state_code', $this->country)->get();
                $this->cities = DB::table('BRANCHES')
                                ->select('branch_code', 'branch_name')
                                ->where('state_code', $this->country)
                                ->get();

            } 

            $selected_state = $this->country;
            $selected_branch = $this->city;
            
            if($selected_branch == 'All'){
                
                $daftar = EMANDATE_ENRP::where('BRANCHES.STATE_CODE',  $selected_state)
                    ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
                    ->join ('BRANCHES', 'BRANCHES.BRANCH_CODE', '=', 'ACCOUNT_MASTER.BRANCH_CODE')
                    ->get();

                $lulus = EMANDATE_ENRP::where('BRANCHES.STATE_CODE',  $selected_state)
                    ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
                    ->join ('BRANCHES', 'BRANCHES.BRANCH_CODE', '=', 'ACCOUNT_MASTER.BRANCH_CODE')
                    ->where('EMANDATE_ENRP.SECTION', 'BLOCK2')
                    ->get();

                $gagal = EMANDATE_ENRP::where('BRANCHES.STATE_CODE',  $selected_state)
                    ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
                    ->join ('BRANCHES', 'BRANCHES.BRANCH_CODE', '=', 'ACCOUNT_MASTER.BRANCH_CODE')
                    ->where('EMANDATE_ENRP.SECTION', 'BLOCK1')
                    ->get();
        
                /* code '00' is not malaysian */
                $countries = BNM_STATECODES::whereNotIn('code', ['00', '99'])->orderBy('code')->get();
                //$countries = BNM_STATECODES::orderBy('code')->get();
                
                return view('livewire.dashboard-filter')->with([
                    'countries'  => $countries,
                    'posts' => $daftar,
                    'postspass' => $lulus,
                    'postsfail' => $gagal,
                
                ]);
            }
            else{
                
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
                $countries = BNM_STATECODES::whereNotIn('code', ['00', '99'])->orderBy('code')->get();
                //$countries = BNM_STATECODES::orderBy('code')->get();
                
                return view('livewire.dashboard-filter')->with([
                    'countries'  => $countries,
                    'posts' => $daftar,
                    'postspass' => $lulus,
                    'postsfail' => $gagal,
                
                ]);

            }//end if select cawangan all



        } //end if branchtype = hq
        else{
                $daftar = EMANDATE_ENRP::where('BRANCHES.BRANCH_CODE' , '=',  $branch_user )
                ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
                ->join ('BRANCHES', 'BRANCHES.BRANCH_CODE', '=', 'ACCOUNT_MASTER.BRANCH_CODE')
                ->get();

                $lulus = EMANDATE_ENRP::where('BRANCHES.BRANCH_CODE' , '=',  $branch_user )
                    ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
                    ->join ('BRANCHES', 'BRANCHES.BRANCH_CODE', '=', 'ACCOUNT_MASTER.BRANCH_CODE')
                    ->where('EMANDATE_ENRP.SECTION', 'BLOCK2')
                    ->get();

                $gagal = EMANDATE_ENRP::where('BRANCHES.BRANCH_CODE' , '=',  $branch_user )
                    ->join ('ACCOUNT_MASTER', DB::raw("TRIM(ACCOUNT_MASTER.ACCOUNT_NO)"), '=', DB::raw("TRIM(EMANDATE_ENRP.PAYREFNUM)")  )
                    ->join ('BRANCHES', 'BRANCHES.BRANCH_CODE', '=', 'ACCOUNT_MASTER.BRANCH_CODE')
                    ->where('EMANDATE_ENRP.SECTION', 'BLOCK1')
                    ->get();

            return view('livewire.dashboard-filter')->with([
                'posts' => $daftar,
                'postspass' => $lulus,
                'postsfail' => $gagal,

                                            
            ]);             


        }
               

    }
}
