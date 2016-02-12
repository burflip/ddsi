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

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function last_update_user()
    {
        return $this->belongsTo('App\User','last_update_user_id');
    }
}
