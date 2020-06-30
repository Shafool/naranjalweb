<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;

class InicioController extends Controller
{
    public function mostrarPagina(){
        return view('inicio');
    }  
}
