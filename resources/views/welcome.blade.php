@extends('layouts.base')
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pagina Web "El Naranjal"</title>
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
                                        <li><a href="about.html">Acerca de</a></li>
                                        <li><a href="service.html">Servicios</a></li>
                                        <li><a href="menu.html">menu</a></li>
                                        <li><a href="gallery.html">galeria</a></li>
                                        <div class="logo-img d-none d-lg-block">
                                                <a href="index.html">
                                                    <img src="{{asset('plugins/ColorLib/img/logo.png')}}">
                                                </a>
                                            </div>
                                        <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="single-blog.html">single-blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="elements.html">elementos</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contactos</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                            <div class="custom_order">
                                <a href="#" class="boxed_btn_white">Orden Personalizado</a>
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

    <!-- slider_area-start -->
    <div class="slider_area zigzag_bg_2">
        <div class="slider_sctive owl-carousel">
            <div class="single_slider slider_img_1">
            
                <div class="single_slider-iner">
                    <div class="slider_contant text-center">
                        <h3>Recreo Campestre <br>
                            "El Naranjal"</h3>
                            <p>Somos un Centro Recreacional Campestre que busca<br>
                            satisfacer al cliente brindandole servicios<br>
                            para su entretenimiento y diversion. </p>
                    </div>
                </div>
            </div>
            <div class="single_slider slider_img_1">
                <div class="single_slider-iner">
                    <div class="slider_contant text-center">
                    <h3>Recreo Campestre <br>
                            "El Naranjal"</h3>
                            <p>Somos un Centro Recreacional Campestre que busca<br>
                            satisfacer al cliente brindandole servicios<br>
                            para su entretenimiento y diversion. </p>
                    </div>
                </div>
            </div>
            <div class="single_slider slider_img_1 ">
                <div class="single_slider-iner">
                    <div class="slider_contant text-center">
                    <h3>Recreo Campestre <br>
                            "El Naranjal"</h3>
                            <p>Somos un Centro Recreacional Campestre que busca<br>
                            satisfacer al cliente brindandole servicios<br>
                            para su entretenimiento y diversion. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area-end -->

    <!-- service_area-start -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-60">
                        <h3>Nuestros Servicios</h3>
                        <p>Ofrecemos la venta de comida de platos tipicos de la selva, criollos y de la sierra. Para el entretenimiento de nuestros clientes.<br> Contamos con una piscina y tambien brindamos el servicios de alquiler de Grass Sintentico</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="single_service">
                        <div class="service_icon">
                            <i class="flaticon-gift"></i>
                        </div>
                        <h4>Eventos</h4>
                        <p>Realizamos todo tipo de eventos: Matrimonios, Promociones, Quinceaños, Campeonatos Deportivos entre otros.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_service">
                        <div class="service_icon">
                            <i class="flaticon-cake"></i>
                        </div>
                        <h4>Fiestas de Cumpleaños</h4>
                        <p>Se realiza eventos de fiestas de cumpleaños</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_service">
                        <div class="service_icon">
                            <i class="flaticon-dance"></i>
                        </div>
                        <h4>Fiestas Populares</h4>
                        <p>Organizamos las mas grandes fiestas, con grupos importantes del pais, garantizamos un gran espectaculo.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_service">
                        <div class="service_icon">
                            <i class="flaticon-calendar"></i>
                        </div>
                        <h4>Fiestas por festividades del Calendario</h4>
                        <p>Realizamos grandes preparaciones y brindamos una gran festividad en los dias mas importantes del año.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_service">
                        <div class="service_icon">
                            <i class="flaticon-businessman"></i>
                        </div>
                        <h4>Servicios a Organizaciones Formales</h4>
                        <p>Brindamos servicios a organizaciones en eventos requeridos por las organizaciones.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_service">
                        <div class="service_icon">
                            <i class="flaticon-running-man"></i>
                        </div>
                        <h4>Deportes</h4>
                        <p>Contamos con dos amplios campos de grass sintetico para la practica del deporte.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service_area-end -->

    <!-- video_area_start -->
    <div class="video_area video_bg zigzag_bg_1 zigzag_bg_2 ">
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

    <!-- order_area_start -->
    <div class="order_area">
        <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title mb-70">
                            <h3>Platos Populares</h3>
                            <p>Entre la gran variedad de platos que ofrecemos a nuestros comensales,<br> 
                                nosotros como negocio sacamos que tenemos unos platos que son los prefiridos de los clientes. </p>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="single_order">
                        <div class="order_thumb">
                            <img src="{{ asset ('plugins/ColorLib/img/order/Plato1.jpeg')}}" alt="">
                            <div class="order_prise">
                                <span>20.00</span>
                            </div>
                        </div>
                        <div class="order_info">
                            <h3><a href="#">Chicharron de Doncella 01</a></h3>
                            <p>Doncella Frita  |   Yuca Frita <br>
                                    Ensalada Criolla   |   Crema de mayonesa 
                            </p>
                            <a href="#" class="boxed_btn">Ver mas!</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_order">
                        <div class="order_thumb">
                            <img src="{{ asset ('plugins/ColorLib/img/order/Plato3.jpeg')}}" alt="">
                            <div class="order_prise">
                                <span>18.00</span>
                            </div>
                        </div>
                        <div class="order_info">
                            <h3><a href="#">Arroz con Mariscos 02</a></h3>
                            <p>Arroz Sazonado en una salsa especial   |   Mariscos  <br>
                                    Ensalada Criolla   |   Crema de mayonesa 
                            </p>
                            <a href="#" class="boxed_btn">Ver mas!</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_order">
                        <div class="order_thumb">
                            <img src="{{ asset ('plugins/ColorLib/img/order/Plato2.jpeg')}}" alt="">
                            <div class="order_prise">
                                <span>20.00</span>
                            </div>
                        </div>
                        <div class="order_info">
                            <h3><a href="#">Lomo Saltado 03</a></h3>
                            <p>Carne de Lomo Fino   |   Papas fritas <br>
                                    arroz   |   cebollas y tomates <br>
                                    hierbas frescas
                            </p>
                            <a href="#" class="boxed_btn">Ver mas!</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_order">
                        <div class="order_thumb">
                            <img src="{{ asset ('plugins/ColorLib/img/order/Plato4.jpeg')}}" alt="">
                            <div class="order_prise">
                                <span>18.00</span>
                            </div>
                        </div>
                        <div class="order_info">
                            <h3><a href="#">Ceviche de Doncella 01</a></h3>
                            <p>Carne de Doncella  |   Jugo de limon <br>
                                    Papas y camotes sancochados   |   combinacion de ajies <br>
                                    lechugas
                            </p>
                            <a href="#" class="boxed_btn">Ver mas!</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_order">
                        <div class="order_thumb">
                            <img src="{{ asset ('plugins/ColorLib/img/order/Plato5.jpeg')}}" alt="">
                            <div class="order_prise">
                                <span>25.00</span>
                            </div>
                        </div>
                        <div class="order_info">
                            <h3><a href="#">Mix 01(Chicharron de Doncella y Ceviche de Doncella) 02</a></h3>
                            <p>Trozos de Doncella Frita  |   Ceviche de Doncella <br>
                                    Yucas Fritas  |   Camote y papas sancochadas <br>
                                    Cancha 
                            </p>
                            <a href="#" class="boxed_btn">Ver mas!</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_order">
                        <div class="order_thumb">
                            <img src="{{ asset ('plugins/ColorLib/img/order/Plato6.jpeg')}}" alt="">
                            <div class="order_prise">
                                <span>25.00</span>
                            </div>
                        </div>
                        <div class="order_info">
                            <h3><a href="#">Mix 02(Arroz con mariscos y ceviche de Doncella ) 03</a></h3>
                            <p>arroz con Mariscos  |  Ceviche de Doncella <br>
                                    Ensalada Criolla   |   camote y papas sancochadas<br>
                                    
                            </p>
                            <a href="#" class="boxed_btn">Ver mas!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- order_area_end -->

    <!-- testmonial_area_start 
    <div class="testmonial_area banner-3">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title white mb-60">
                        <h3>Feedback from Customers</h3>
                        <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards <br> especially in the workplace. That’s why it’s crucial that, as women.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_testmonial d-flex">
                            <div class="testmonial_thumb">
                                <img src="img/testmonial/1.png" alt="">
                            </div>
                            <div class="testmonial_author">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one
                                    yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single_testmonial d-flex">
                            <div class="testmonial_thumb">
                                <img src="img/testmonial/2.png" alt="">
                            </div>
                            <div class="testmonial_author">
                                <h3>Adam Nahan</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one
                                    yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single_testmonial d-flex">
                            <div class="testmonial_thumb">
                                <img src="img/testmonial/1.png" alt="">
                            </div>
                            <div class="testmonial_author">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one
                                    yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single_testmonial d-flex">
                            <div class="testmonial_thumb">
                                <img src="img/testmonial/2.png" alt="">
                            </div>
                            <div class="testmonial_author">
                                <h3>Adam Nahan</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one
                                    yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single_testmonial d-flex">
                            <div class="testmonial_thumb">
                                <img src="img/testmonial/1.png" alt="">
                            </div>
                            <div class="testmonial_author">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one
                                    yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single_testmonial d-flex">
                            <div class="testmonial_thumb">
                                <img src="img/testmonial/2.png" alt="">
                            </div>
                            <div class="testmonial_author">
                                <h3>Adam Nahan</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one
                                    yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testmonial_area_end -->

    <!-- brand_area-start -->
    <div class="brand_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-70">
                        <h3>Brindamos un servicio con calidad y atencion a nuestros clientes.</h3>
                        <p>Somos un negocio que busca satisfacer las necesidades nuestros clientes con estandares de calidad
                             <br>trabajando en mejorar con los servicios prestados</p>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/1.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/02.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/03.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/04.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/05.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/06.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/7.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/12.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/9.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/10.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/11.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/8.png" alt="">
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- brand_area-end -->

    <!-- footer-start -->
    <footer class="footer_area footer-bg zigzag_bg_1">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    Ranking platos
                           <!-- <ul>
                                <li><a href="#">Managed Website</a></li>
                                <li><a href="#"> Manage Reputation</a></li>
                                <li><a href="#">Power Tools</a></li>
                                <li><a href="#">Marketing Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    Quick Links
                            </h3>
                            <ul>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Brand Assets</a></li>
                                <li><a href="#"> Investor Relations</a></li>
                                <li><a href="#">Terms of Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    Features
                            </h3>
                            <ul>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Brand Assets</a></li>
                                <li><a href="#">Investor Relations</a></li>
                                <li><a href="#">Terms of Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    Resources
                            </h3>
                            <ul>
                                <li><a href="#">Guides</a></li>
                                <li><a href="#">Research</a></li>
                                <li><a href="#">Experts</a></li>
                                <li><a href="#">Agencies</a></li>
                            </ul>
                        </div>
                    </div>!-->
                    <div class="col-xl-4 col-md-12 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    Sugerencias
                            </h3>
                            <p class="offer_text" >Introduzca su correo</p>
                            <form action="#">
                                <input type="text" placeholder="Your email address">
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Derechos Reservados  <i class="fa fa-heart-o" aria-hidden="true"></i> <a href="https://colorlib.com" target="_blank"></a>
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