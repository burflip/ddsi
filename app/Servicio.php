<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    public function facturas()
    {
        $this->belongsToMany('App\Factura');
    }
}
