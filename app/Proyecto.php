<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    public function presupuestos()
    {
        $this->hasMany('App\Presupuesto');
    }

    public function facturas()
    {
        $this->hasMany('App\Facturas');
    }

    public function clientes()
    {
        $this->hasMany('App\Clientes');
    }
}
