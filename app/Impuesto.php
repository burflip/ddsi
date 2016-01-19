<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Impuesto extends Model
{
    public function facturas()
    {
        $this->belongsToMany('App\Facturas');
    }
}
