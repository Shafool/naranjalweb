<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    // Las relaciones entre entidades se definen mediante funciones

    public function productos(){
        return $this->hasMany('App\Producto');
    }
}
