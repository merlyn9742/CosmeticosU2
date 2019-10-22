<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model{
    public function producto(){
        return $this->belongsTo('App\Producto','idProducto','idProducto');
    }
}
