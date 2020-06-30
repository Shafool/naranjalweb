<?php

use Illuminate\Support\Facades\Route;

// Rutas administrador
Route::get('/admin/login/', function () {
    return view('admin.login');
});

/* Gestor de contenidos */

// Pantalla Principal
        Route::get('/admin/', 'AdminController@mostrar')->name('admin');

    // Crud Carta
        // Vistas
        Route::get('/admin/productos/', 'AdminCartaController@mostrarPagina')->name('adminProductos');
        Route::get('/admin/productos/editar/{id?}/', 'AdminCartaController@detalleProducto')->name('adminProductoDetalle');
        Route::get('/admin/productos/nuevo/', 'AdminCartaController@nuevoProducto')->name('adminProductoNuevo');
        Route::get('/admin/productos/nuevo/{cat?}/', 'AdminCartaController@nuevoProducto')->name('adminProductoNuevo');

        // Operaciones Productos
        Route::post  ('/producto/crear/', 'AdminCartaController@crearProducto')->name('adminProductoCrear');
        Route::put   ('/producto/actualizar/{id}', 'AdminCartaController@actualizarProducto')->name('adminProductoActualizar');
        Route::delete('/producto/eliminar/{id}', 'AdminCartaController@eliminarProducto')->name('adminProductoEliminar');

        // Operaciones Categorias
        Route::post  ('/categoria/actualizar/{id}', 'AdminCartaController@actualizarCategoria')->name('adminCategoriaActualizar');
        Route::delete('/categoria/eliminar/{id}', 'AdminCartaController@eliminarCategoria')->name('adminCategoriaEliminar');

    // Crud Reservas
        Route::get('/admin/reservas/', 'AdminReservasController@mostrarPagina')->name('adminReservas');
        Route::get('/admin/reservas/nuevo/', 'AdminReservasController@nuevaReserva')->name('adminReservaNueva');


        // Crud Servicios
        Route::get('/admin/servicios/', 'AdminCartaController@mostrarPagina')->name('adminServicios');



    // Rutas cliente
    Route::get('/', 'InicioController@mostrarPagina')->name('rutaInicio');
    Route::get('/acerca/', 'AcercaController@mostrarPagina')->name('rutaAcerca');
    Route::get('/carta/', 'CartaController@mostrarPagina')->name('rutaCarta');