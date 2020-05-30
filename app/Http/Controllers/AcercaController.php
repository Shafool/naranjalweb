<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcercaController extends Controller
{
    public function mostrarPagina(){
        $titulo = 'El Naranjal'; // H2
        $descripcion = 'El Naranjal es un centro recreacional campestre que cuenta con diferentes espacios recreativos.<br>como campos de fulbito y voley, una piscina semiolimpica, restaurante y salon de recepciones.<br>ademas de areas libres para el uso del publico visitante.';

        return view('acerca', compact('titulo', 'descripcion'));
    }  
}
