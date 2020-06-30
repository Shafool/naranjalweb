<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CartaController extends Controller
{   
    public function mostrarPagina(){
        $titulo = 'Carta'; // H1
        $descripcion = 'Aquí encontrarás la mejor carta de nuestros deliciosos platillos y bebidas.';

        // Solicitamos a la BD todos los platos
        $categorias = Categoria::all();

        // Le pasamos todas la variables necesarias para que las pinte en pantalla
        return view('carta', compact('titulo', 'descripcion', 'categorias'));
    }
}
