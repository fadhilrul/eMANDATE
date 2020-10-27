<?php

namespace App\Http\Livewire;

use App\EMANDATEINFO;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class BlockedPaymentRpt extends LivewireDatatable
{
    public $model = EMANDATEINFO::class;

    public function columns()
    {
        //
    }
}