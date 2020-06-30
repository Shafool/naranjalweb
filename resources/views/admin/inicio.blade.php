@extends('admin.plantilla')

@section('titulo') Panel de control - Inicio
@endsection

@section('informacion')
<h1 class="my-2">Panel de Control</h1>
<p>Bienvenido al panel de control de tu sitio web, aqui podrás agregar, quitar, editar o eliminar productos, reservas, servicios y fotos.</p>
@endsection

@section('contenido')
<h2 class="my-5">Opciones</h2>

@if(session('mensaje'))
    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>
@endif
        
<div class="row">
    <div class="modulo carta col-md p-4 m-3" style="background-image: url('{{ asset('storage/imagenes/cms/carta-bg.png')}}');">
        <div class="modulo-dentro">
            <h3 class="modulo-titulo">Carta</h3>
            <p class="modulo-desc" >Visualiza los productos que tienes en la carta de productos</p>
            <ul>
                <li><a class="modulo-link" href="{{ route('adminProductos') }}">Ver Carta</a></li>
                <li><a class="modulo-link" href="{{ route('adminProductoNuevo') }}">Crear nuevo Producto</a></li>
                <li><a class="modulo-link" href="">Crear nueva Categoría</a></li>
            </ul>
        </div>
    </div>

    <div class="modulo carta col-md p-4 m-3" style="background-image: url('{{ asset('storage/imagenes/cms/reservas-bg.png')}}');">
        <div class="modulo-dentro">
            <h3 class="modulo-titulo">Reservas</h3>
            <p class="modulo-desc" >Visualiza las reservas de los Servicios (Canchas, local, piscina, etc)</p>
            <ul>
                <li><a class="modulo-link" href="">Ver Reservas</a></li>
                <li><a class="modulo-link" href="{{ route('adminReservaNueva') }}">Crear nueva Reserva</a></li>
            </ul>
        </div>
    </div>

</div>
<div class="row">
    <div class="modulo servicios col-md p-4 m-3" style="background-image: url('{{ asset('storage/imagenes/cms/servicios-bg.png')}}');">
        <h3 class="modulo-titulo">Servicios</h3>
        <p class="modulo-desc">Visualiza o crea un servicio</p>
        <ul>
            <li><a class="modulo-link" href="">Ver Servicios</a></li>
            <li><a class="modulo-link" href="">Crear nuevo Servicio</a></li>
        </ul>
    </div>
</div>
@endsection

