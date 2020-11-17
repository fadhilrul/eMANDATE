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


class EMANDATE_INFO extends Model
{
    protected $table = 'EMANDATE_INFO';
    protected $guarded = [];
    //protected $fillable = [];
    public $timestamps = false;
    protected $primaryKey = 'fms_acct_no';
        
    public  function cft()
    {
        return $this->hasMany('App\Models\EMANDATE_CFT','payrefno','fms_acct_no');
    }

    public  function res()
    {
        return $this->hasMany('App\Models\EMANDATE_RES','substr(filler,0,14)','fms_acct_no');
    }
}

