<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function facturas()
    {
        $this->hasMany('App\Factura');
    }

    public function proyectos()
    {
        $this->belongsToMany('App\Proyecto');
    }
}
