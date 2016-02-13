<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    public function productos()
    {
        return $this->hasMany('App\Producto');
    }

    public function servicios()
    {
        return $this->hasMany('App\Servicio');
    }

    public function impuestos()
    {
        return $this->hasMany('App\Impuesto');
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
