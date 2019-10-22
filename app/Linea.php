<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linea extends Model
{
    public function producto(){
        return $this->belongsTo('App\Producto','idLinea','idLinea');
    }
}
