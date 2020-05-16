<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/acerca.html', function () {
    return view('acerca');
});

Route::get('/index.html', function () {
    return view('welcome');
});