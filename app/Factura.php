<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    public function productos()
    {
        $this->hasMany('App\Producto');
    }

    public function servicios()
    {
        $this->hasMany('App\Servicio');
    }

    public function impuestos()
    {
        $this->hasMany('App\Impuesto');
    }

    public function cliente()
    {
        $this->belongsTo('App\Cliente');
    }

    public function proyecto()
    {
        $this->belongsTo('App\Proyecto');
    }
}
