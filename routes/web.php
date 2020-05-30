<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('inicio');
})->name('rutaInicio');;

Route::get('/login.html', function () {
    return view('login');
});
Route::get('/acerca', 'AcercaController@mostrarPagina')->name('rutaAcerca');
Route::get('/carta', 'CartaController@mostrarPagina')->name('rutaCarta');