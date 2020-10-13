<?php
  
namespace App\Http\Controllers;
  
use App\Models\EMANDATE_CFT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
  
class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = EMANDATE_CFT::paginate(5);
       // $status = EMANDATE_CFT::latest()->paginate(5);
    
        return view('pages.statusindex',compact('status'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\status  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $status = EMANDATE_CFT::where('buyeracc','like','%'.$id.'%')->paginate(5);
        return view('pages.statusedit',compact('status'));

    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    //public function edit(EMANDATE_CFT $status)
    public function edit($id)

    {
        //return view('pages.statusedit',compact('status'));

        $status = EMANDATE_CFT::where('buyeracc','like','%'.$id.'%')->paginate(5);
        return view('pages.statusedit',compact('status'));

    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    
   
    public function update(Request $request, $id)
    {
        

      $request->validate([
        'action' => 'required',
        ]);


        // $status = EMANDATE_CFT::where('BUYERACC','like','%'.$id.'%')->first();
        // //$status->update($request->all());
        // $status->status = $request->status;
        // $status->save();

       // dd($status);
        // if ($status->wasChanged()) {
        //     
        // }

        $change = DB::table('EMANDATE_CFT')
            ->where('BUYERACC', $id)
            ->update([
                'action' => $request->action,
            ]);
        
          
        if($change == true) {
            return redirect('/change-status')->with('success', 'Pertukaran Status Berjaya');
        }

        
   
    }
   
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(EMANDATE_CFT $status)
    {
        //
    }
}