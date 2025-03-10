<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    public function categoria(){
        return $this->belongsTo('App\Categoria');
    }

    public function fotos(){
        return $this->hasMany('App\FotoProducto');
    }
}
