<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>@yield('titulo')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('plugins/ColorLib/img/logo.png') }}">

    <!-- Bootstrap core CSS -->
    <link href = "{{ asset('storage/css/bootstrap.css') }}" rel="stylesheet"/>
    <link href = "{{ asset('storage/css/cms.estilos.css') }}" rel="stylesheet"/>

</head>
<body>
    <header>    
        <nav class="navbar navbar-expand flex-column navbar-dark bg-dark">
            <a class="navbar-brand mr-0 mr-md-2" href="#">Panel de Control - El Naranjal</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin') }}">Inicio<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('adminProductos') }}">Carta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('adminReservas') }}">Reservas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('adminServicios') }}">Servicios</a>
                    </li>
                    
                </ul>
            </div>
        </nav>

        <div class="container pt-3 mt-5">
            @yield('informacion')
        </div>
    </header>
    
    <section class="container">
        @yield('contenido')
    <section>

    <!-- Scripts -->
    @yield('scripts')
</body>