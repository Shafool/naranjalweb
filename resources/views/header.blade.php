<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-10 col-lg-10">
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul class="mein_menu_list" id="navigation">
                                <div class="logo-img d-none d-lg-block">
                                            <a href="{{ route('rutaInicio') }}">
                                                <img src="{{asset('plugins/ColorLib/img/logo.png')}}">
                                            </a>
                                        </div>
                                    <li><a href="{{ route('rutaAcerca') }}">Acerca de</a></li>
                                    <li><a href="{{ route('rutaCarta') }}">Carta <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                            <li><a href="blog.html">Ceviches</a></li>
                                            <li><a href="single-blog.html">Chicharrones</a></li>
                                            <li><a href="single-blog.html">Sudados</a></li>
                                            <li><a href="single-blog.html">Mariscos</a></li>
                                            <li><a href="single-blog.html">Frituras</a></li>
                                            <li><a href="single-blog.html">Platos criollos</a></li>
                                            <li><a href="single-blog.html">Selva</a></li>
                                            <li><a href="single-blog.html">Chilcanos</a></li>
                                        </ul>
                                    <li><a href="#">Servicios <i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Grass sintetico</a></li>
                                            <li><a href="single-blog.html">Piscina</a></li>
                                            <li><a href="single-blog.html">Local de Eventos</a></li>
                                            <li><a href="single-blog.html">Reservaciones</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="promociones.html">Promociones</a></li>
                            
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                        <div class="custom_order">
                            <a href="login.html" class="boxed_btn_white">Login</a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                    <div class="logo-img-small d-sm-block d-md-block d-lg-none">
                            <a href="{{ route('rutaInicio') }}">
                                <img src="{{asset('plugins/ColorLib/img/logo.png')}}" alt="">
                            </a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</header>