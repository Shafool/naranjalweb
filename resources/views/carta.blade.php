@extends('head')
<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
    @extends('header')

    <!-- breadcam_area_start -->
    <div class="breadcam_area breadcam_bg_1 zigzag_bg_2">
        <div class="breadcam_inner">
            <div class="breadcam_text">
                <h3>{{ $titulo }}</h3>
                <p>{{ $descripcion }}</p>
            </div>
        </div>
    </div>

    <!-- Categorias -->
    @foreach($categorias as $cat)
        <div class="order_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title mb-70">
                            <h3>{{ $cat->nombre }}</h3>
                            <p>{{ $cat->descripcion }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                <!-- Pintamos todos los productos  -->

                    @foreach($productos as $prod)
                    @if ($prod->categoria === $cat->id)
                        <div class="col-xl-4 col-md-6">
                            <div class="single_order">
                                <div class="order_thumb">

                                    <!-- Buscar entre todas las imagenes, si existe, mostrar la primera -->
                                    @foreach($fotos as $f)
                                    @if($f->producto === $prod->id && $f->orden === 1)
                                        <img src="{{ asset('storage/imagenes/sitio/productos/' . $f->nombre) }}" alt="$f->nombre">
                                        @break
                                    @endif
                                    @endforeach
                                  
                                    <div class="order_prise">
                                        <span>{{ $prod->precio }}</span>
                                    </div>
                                </div>
                                <div class="order_info">
                                    <h3><a href="#">{{ $prod->nombre }}</a></h3>
                                    <p>{{ $prod->descripcion }}</p>
                                    <a href="#" class="boxed_btn">Ver mas</a>
                                </div>
                            </div>
                        </div>
                    @endif
                    @endforeach()
                    
                </div>
            </div>
        </div>
    @endforeach()
    
    @extends('footer')


    <!-- JS here -->
    @extends('layouts.scripts')

</body>

</html>