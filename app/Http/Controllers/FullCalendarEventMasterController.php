<?php
namespace App\Http\Controllers;
use App\Models\emandate_date_cft;
use Illuminate\Http\Request;
use App\Http\Resources\EmandateDateCftResource;

use Redirect,Response;
class FullCalendarEventMasterController extends Controller
{
    public function api(){
        $data = emandate_date_cft::all();
        // return response()->json([
        //     [
        //         'title' => 'Event Title1',
        //         'start'=> '2020-12-06T13:13:55.008',
        //         'end'=> '2020-12-06T13:13:55.008'
        //     ]
        // ]);
        return Response::json(EmandateDateCftResource::collection($data));
    }
    public function index()
    {
        if(request()->ajax())
        {
            if(!empty($GET["starts"])){
                $starts = $_GET["starts"];
            }else{
                $starts = null;
            }

            if(!empty($_GET["end"])){
                $end = $_GET["end"];
            }else{
                $end = null;

            }

            $data = emandate_date_cft::whereDate('starts', '>=', $starts)->whereDate('end',   '<=', $end)->get(['id','title','starts', 'end']);
            return Response::json($data);
               
        }
        return view('pages.fullcalender');
    }
    public function create(Request $request)
    {
        $insertArr = [ 'title' => $request->title,
        'starts' => $request->starts,
        'end' => $request->end
        ];

        $eMandate = new emandate_date_cft();
        $eMandate->title = $request->title;
        $eMandate->starts = $request->starts;
        $eMandate->end = $request->end;
        $eMandate->save();

        return Response::json($eMandate);
    }
    public function update(Request $request)
    {
        $where = array('id' => $request->id);
        $updateArr = ['title' => $request->title,'starts' => $request->starts, 'end' => $request->end];
        $event  = emandate_date_cft::where($where)->update($updateArr);
        return Response::json($event);
    }
    public function destroy(Request $request)
    {
        $event = emandate_date_cft::where('id',$request->id)->delete();
        return Response::json($event);
    }
}
?>