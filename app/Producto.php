<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function facturas()
    {
        return $this->belongsToMany('App\Factura');
    }
}
