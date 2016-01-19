<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function facturas()
    {
        return $this->belongsToMany('App\Factura');
    }

    public function usuario()
    {
        return $this->belongsTo('App\User');
    }
}
