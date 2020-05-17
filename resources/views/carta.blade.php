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
                <h3>{{ $subtitulo }}</h3>
                <p>{{ $descripcion }}</p>
            </div>
        </div>
    </div>
    <!-- breadcam_area_end -->

    <!-- order_area_start -->
    <div class="order_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-70">
                        <h3>Ceviches</h3>
                        <p>Nuestra mejor selección de ceviches, chicharrones y mariscos</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-xl-4 col-md-6">
                    <div class="single_order">
                        <div class="order_thumb">
                            <img src="./img/productos/ceviche_doncella.jpeg" alt="">
                            <div class="order_prise">
                                <span>10.00</span>
                            </div>
                        </div>
                        <div class="order_info">
                            <h3><a href="#">Ceviche de Doncella</a></h3>
                            <p>Chicken Fried Rice   |   Crispy Chicken fry <br>
                                    Weastern Pickle   |   Mixed Vegetable <br>
                                    Soft Drinks
                            </p>
                            <a href="#" class="boxed_btn">Ver mas</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="single_order">
                        <div class="order_thumb">
                            <img src="./img/productos/chicharron_doncella.jpeg" alt="">
                            <div class="order_prise">
                                <span>10.00</span>
                            </div>
                        </div>
                        <div class="order_info">
                            <h3><a href="#">Chicharrón de Doncella</a></h3>
                            <p>Chicken Fried Rice   |   Crispy Chicken fry <br>
                                    Weastern Pickle   |   Mixed Vegetable <br>
                                    Soft Drinks
                            </p>
                            <a href="#" class="boxed_btn">Ver mas</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_order">
                        <div class="order_thumb">
                            <img src="./img/productos/lomo_saltado.jpeg" alt="">
                            <div class="order_prise">
                                <span>10.00</span>
                            </div>
                        </div>
                        <div class="order_info">
                            <h3><a href="#">Lomo Saltado</a></h3>
                            <p>Chicken Fried Rice   |   Crispy Chicken fry <br>
                                    Weastern Pickle   |   Mixed Vegetable <br>
                                    Soft Drinks
                            </p>
                            <a href="#" class="boxed_btn">Ver mas</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_order">
                        <div class="order_thumb">
                            <img src="./img/productos/mix1_chicharron_ceviche_doncella.jpeg" alt="">
                            <div class="order_prise">
                                <span>10.00</span>
                            </div>
                        </div>
                        <div class="order_info">
                            <h3><a href="#">Mix 1 - Chicharrón y Ceviche de Doncella</a></h3>
                            <p>Chicken Fried Rice   |   Crispy Chicken fry <br>
                                    Weastern Pickle   |   Mixed Vegetable <br>
                                    Soft Drinks
                            </p>
                            <a href="#" class="boxed_btn">Ver mas</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_order">
                        <div class="order_thumb">
                            <img src="./img/productos/mix2_arroz_mariscos_ceviche_doncella.jpeg" alt="">
                            <div class="order_prise">
                                <span>10.00</span>
                            </div>
                        </div>
                        <div class="order_info">
                            <h3><a href="#">Mix 2 - Arroz c/ Mariscos y Ceviche de Doncella</a></h3>
                            <p>Chicken Fried Rice   |   Crispy Chicken fry <br>
                                    Weastern Pickle   |   Mixed Vegetable <br>
                                    Soft Drinks
                            </p>
                            <a href="#" class="boxed_btn">Ver mas</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_order">
                        <div class="order_thumb">
                            <img src="./img/productos/arroz_mariscos.jpeg" alt="">
                            <div class="order_prise">
                                <span>10.00</span>
                            </div>
                        </div>
                        <div class="order_info">
                            <h3><a href="#">Arroz con Mariscos</a></h3>
                            <p>Chicken Fried Rice   |   Crispy Chicken fry <br>
                                    Weastern Pickle   |   Mixed Vegetable <br>
                                    Soft Drinks
                            </p>
                            <a href="#" class="boxed_btn">Ver mas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- order_area_end -->

    @extends('footer')


    <!-- JS here -->
    @extends('layouts.scripts')

</body>

</html>