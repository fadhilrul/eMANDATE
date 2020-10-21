<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EMANDATE_INFO extends Model
{
    use HasFactory;

    protected $table = 'EMANDATE_INFO';

    protected $guarded = [];
   
    public $timestamps = false;

    protected $primaryKey = 'fms_acct_no';

}