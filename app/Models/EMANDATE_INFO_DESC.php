<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// class EMANDATE_INFO extends Model
// {
//     use HasFactory;

//     protected $table = 'EMANDATE_INFO';

//     protected $guarded = [];
   
//     public $timestamps = false;

//     protected $primaryKey = 'fms_acct_no';

// }


class EMANDATE_INFO_DESC extends Model
{
    protected $table = 'EMANDATE_INFO_DESC';
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = 'IDDESC';
        
    public  function INFO()
    {
        return $this->belongsTo('App\Models\EMANDATE_INFO','IDDESC','fms_acct_no');
    }
}

