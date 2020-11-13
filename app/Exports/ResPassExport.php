<?php

namespace App\Exports;

//use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Http\Request;
use App\Models\EMANDATE_RES;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class ResPassExport implements FromQuery,WithHeadings
{
    
    protected $id;
        function __construct($id) {
        $this->idrptresfail = $id;
    }

    public function headings(): array
    {
        /*nama header */
        return [
            'SEQNO',
            'TARIKH TRANSAKSI',
            'NO AKAUN',
            'KAD PENGENALAN',
            'JUMLAH POTONGAN',
            'STATUS',
        ];
    }

    public function query()
    {
        return  DB::table('EMANDATE_RES')
        //->select('hdate', 'substr(filler, 1, 14)' ,'ic','tranamt','status')
        ->select('hdate', 'filler' ,'ic','tranamt','status')
        ->where('filename','like', "%".$this->idrptresfail."%")
        ->where('status','=','00')
        ->orderby('filename')
         ;      
    }



}
