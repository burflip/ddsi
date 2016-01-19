<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presupuesto extends Model
{
    public function facturas()
    {
        return $this->hasMany('App\Factura');
    }

    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }

    public function proyecto()
    {
        return $this->belongsTo('App\Proyecto');
    }
}
