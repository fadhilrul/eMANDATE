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



class EMANDATE_CFT extends Model
{
    protected $table = 'MDT_TFC';
    protected $guarded = [];

    public  function info()
    {
        return $this->belongsTo('App\Models\MDT_OFNI','payrefno','fms_acct_no');
    }
}
