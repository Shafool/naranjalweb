<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FotoProducto extends Model{
    //
    public function producto(){
        return $this->belongsTo('App\Producto');
    }
}
