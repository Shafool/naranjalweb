@extends('head')
<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    @extends('header')
    <!-- header-end -->

    <!-- breadcam_area_start -->
    <div class="breadcam_area breadcam_bg_1 zigzag_bg_2">
            <div class="breadcam_inner">
                <div class="breadcam_text">
                    <h3>{{ $titulo }}</h3>
                    <p>{{ $descripcion }}</p>
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
    @extends('layouts.scripts')

</body>

</html>