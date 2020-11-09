<?php

namespace App\Exports;

use Illuminate\Http\Request;
use App\Models\EMANDATE_ENRP;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class EnrpExport implements FromQuery,WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        /*nama header */
        return [
            'NO',
            'HCRDATE',
            'BATCHID',
            'PAYREFNUM',
            'IDTYPE',
            'IDNUM',
            'BUYERNAME',
            'BUYERACCT',
            'DEBITAMT',
            'PURPOSE',
            'TELNO',
            'EMAIL',
            'EFFDATE',
            'EXPDATE',
            'APPDATE',

        ];
    }

    public function query()
    {
        //return EMANDATE_ENRP::query();
        /*you can use condition in query to get required result*/
        /* to select all column
        return EMANDATE_ENRP::query()->where('approval','not like','%00%'); */

        /* to select selected column */
         return EMANDATE_ENRP::query()
                ->select('hcrdate','batchid','payrefnum','idtype','idnum','buyername','buyeracct','debitamt','purpose', 'telno','email','effdate','expdate','appdate')
                ->where('approval','not like','%00%');

    }

   /* public function map($bulk): array
    {
        return [
            $bulk->payrefnum,
            $bulk->buyername,
            $bulk->hcrdate,
            $bulk->approval,
        ];
    }*/


}