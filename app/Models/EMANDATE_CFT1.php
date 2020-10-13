<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EMANDATE_CFT1 extends Model
{
    use HasFactory;

    protected $table = 'EMANDATE_CFT1';

    public $timestamps = false;

    protected $primaryKey = 'BUYERACC';

    // protected $guarded = [];

    protected $fillable = [];

}
