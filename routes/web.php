<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/acerca', function () {
    return view('acerca');
})->name('rutaAcerca');;

Route::get('/inicio', function () {
    return view('welcome');
})->name('rutaInicio');;

Route::get('/carta', function () {
    $titulo = 'Recreo Campestre "El Naranjal"- Carta';
    $subtitulo = 'Carta';
    $descripcion = 'Aquí encontrarás la mejor carta de nuestros deliciosos platillos y bebidas.';

    return view('carta', compact('titulo', 'subtitulo', 'descripcion'));
})->name('rutaCarta');