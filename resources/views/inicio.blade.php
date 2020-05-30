@extends('head')
<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    @extends('header')

    <!-- slider_area-start -->
     <div class="breadcam_area breadcam_bg_1 zigzag_bg_2">
       <div class="breadcam_inner">
            <div class="breadcam_text">
                <h3><mark>Recreo Campestre<mark><br>"El Naranjal"</h3>
                <p><mark>El Naranjal es un centro recreacional campestre que cuenta con diferentes espacios recreativos. <br> como campos de fulbito y voley, una piscina semiolimpica, restaurante y salon de recepciones.<br> ademas de areas libres para el uso del publico visitante.</mark></p>    
            </div>
        </div>
    </div>
   <!-- <div class="breadcam_area breadcam_bg_1 zigzag_bg_2">
            <div class="breadcam_inner">
                <div class="breadcam_text">
                    <h3>El Naranjal</h3>
                    <p>El Naranjal es un centro recreacional campestre que cuenta con diferentes espacios recreativos. <br> como campos de fulbito y voley, una piscina semiolimpica, restaurante y salon de recepciones.<br> ademas de areas libres para el uso del publico visitante.</p>
                </div>
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
    </div> -->
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
                                Tenemos a los mas preferidos por nuestros comensales. </p>
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
                                <span> 25.00</span>
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
                    <div>  <iframe src="https://goo.gl/maps/Zo6R9nZf5sSyTeoV6"
                  marginwidth="0" marginheight="0" name="ventana_iframe" scrolling="no" border="0" 
                  frameborder="0" width="800" height="600">
                  </iframe>
          </div>
                </div>
         </div>
                    </div>
                    </div>
    <!-- brand_area-end -->

    @extends('footer')

    <!-- JS here -->
    @extends('layouts.scripts')

</body>
</html>