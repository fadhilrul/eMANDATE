<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// class EMANDATE_CFT extends Model
// {
//     use HasFactory;

//     protected $table = 'EMANDATE_CFT';

//     protected $guarded = [];

// }



class MDT_SER extends Model
{
    protected $table = 'MDT_SER';
    protected $guarded = [];

    public  function info()
    {
        return $this->belongsTo('App\Models\EMANDATE_INFO','substr(filler,0,14)','fms_acct_no');
    }
}
