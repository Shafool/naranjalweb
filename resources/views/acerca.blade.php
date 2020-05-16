@extends('layouts.base')
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Recreo Naranjal Sitio Web</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('plugins/ColorLib/img/logo.png')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('plugins/ColorLib/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/ColorLib/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/ColorLib/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/ColorLib/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/ColorLib/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/ColorLib/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/ColorLib/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/ColorLib/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/ColorLib/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/ColorLib/css/style.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
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
                                                <a href="index.html">
                                                    <img src="{{asset('plugins/ColorLib/img/logo.png')}}">
                                                </a>
                                            </div>
                                        <li><a href="acerca.html">Acerca de</a></li>
                                        <li><a href="#">Carta <i class="ti-angle-down"></i></a>
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
                                            </ul>
                                        </li>
                                        <li><a href="promociones.html">Promociones</a></li>
                                
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                            <div class="custom_order">
                                <a href="#" class="boxed_btn_white">Contactos</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                        <div class="logo-img-small d-sm-block d-md-block d-lg-none">
                                <a href="index.html">
                                    <img src="{{asset('plugins/ColorLib/img/logo.png')}}" alt="">
                                </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- breadcam_area_start -->
    <div class="breadcam_area breadcam_bg_1 zigzag_bg_2">
            <div class="breadcam_inner">
                <div class="breadcam_text">
                    <h3><mark>El Naranjal</mark></h3>
                    <p><mark>El Naranjal es un centro recreacional campestre que cuenta con diferentes espacios recreativos. <br> como campos de fulbito y voley, una piscina semiolimpica, restaurante y salon de recepciones.<br> ademas de areas libres para el uso del publico visitante.</mark></p>
                </div>
            </div>
    </div>
    <!-- breadcam_area_end -->

    <!-- single_about_area_start -->
    <div class="single_about_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-5">
                    <div class="single_about_text">
                        <h3>Nuestro Objetivo
                             </h3>
                            <p class="about_text1">
                                Ser conocidos como simbolo del entretenimiento y diversion a nivel de Pichari y el VRAEM, asi como precedente para la difusion de los atractivos naturales turisticos.
                            </p>
                    
                            <a href="#" class="boxed_btn">Ver Inicio</a>
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1">
                    <div class="single_about_thumb thumb_n1">
                        <img src="{{asset('plugins/ColorLib/img/about/imagen3.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single_about_area_end -->

    <!-- video_area_start -->
    <div class="video_area video_bg zigzag_bg_2 zigzag_bg_1">
        <div class="video_area_inner">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="video_text">
                            <div class="info">
                                <div class="info_inner">
                                        <h4>Ver Video</h4>
                                        <p>Haga Click para ver</p>
                                </div>
                                <div class="icon_video">
                                    <a class="popup-video" href="{{asset('plugins/ColorLib/img/Video Introduccion.mp4')}}"><i class="ti-control-play"></i></a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- video_area_end -->

    <!-- single_about_area_start -->
    <div class="single_about_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="single_about_thumb thumb_n2">
                        <img src="{{ asset ('plugins/ColorLib/img/about/piscina3.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-5 offset-lg-1">
                    <div class="single_about_text">
                        <h3>Mision </h3>
                            <p class="about_text1">
                               Somos un Centro recreacional campestre que busca satisfacer al cliente brindandole servicios para su entretenimiento y diversion.
                            </p>
                            <h3>Vision </h3>
                            <p class="about_text2">
                               Ser la mejor opcion de entretenimiento familiar y turistico de Pichari; superando las expectativas de nuestro publico objetivo.
                            </p>
                            <a href="#" class="boxed_btn">Ver Inicio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single_about_area_end -->
    
    <!-- testmonial_area_start -->
    
    <!-- brand_area-end -->

    <!-- footer-start -->
    <footer class="footer_area footer-bg zigzag_bg_1">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    Telefono
                            </h3>
                            <ul>
                                <li><a href="#">+51 987654321</a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    Correos
                            </h3>
                            <ul>
                                <li><a href="#">recreonaranjal@gmail.com</a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"> </a></li>
                                <li><a href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    Correos
                            </h3>
                            <p class="offer_text" >Escriba su mensaje</p>
                            <form action="#">
                                <input type="text" placeholder="Ingrese su correo">
                                <button type="submit"> <i class="ti-arrow-right"></i> </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-md-12 col-lg-8">
                        <div class="copyright">
                                <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los Derechos Reservados |<i class="fa fa-heart-o" aria-hidden="true"></i> 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-12 col-lg-4">
                        <div class="social_links">
                            <ul>
                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-dribbble"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-behance"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->


    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>

</body>

</html>