<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class emandate_date_cft extends Model
{
    protected $table = 'emandate_date_cft';
    protected $fillable = ['id','title','starts','end'];
    public $timestamps = false;


}
