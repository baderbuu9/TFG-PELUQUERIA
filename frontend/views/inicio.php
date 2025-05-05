<?php
incluirTemplate('header');
?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="frontend/assets/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
						<div class="mx-sm-5 px-5" style="max-width: 900px;">
                            <h1 class="display-2 text-white text-uppercase mb-4 animated slideInDown">Corte de Alta Gama sin Salir de Casa</h1>
							<h4 class="text-white text-uppercase mb-4 animated slideInDown">
                            <i class="fa fa-home text-primary me-3"></i>Comodidad y Estilo en tu Hogar</h4>
                        <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i class="fa fa-phone-alt text-primary me-3"></i>+34 919 90 01 99</h4>
                        <a href="index.php?pagina=cita" class="btn btn-primary rounded-0 py-2 px-lg-4 mt-3 animated slideInDown" >SOLICITA TU SERVICIO A DOMICILIO<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="frontend/assets/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
						<div class="mx-sm-5 px-5" style="max-width: 900px;">
                            <h1 class="display-2 text-white text-uppercase mb-4 animated slideInDown">Te Dejaremos un Look Increíble</h1>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i class="fa fa-map-marker-alt text-primary me-3"></i>Calle Juan de Austria, 6, 28982 Parla, Madrid</h4>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i class="fa fa-phone-alt text-primary me-3"></i>+34 919 90 01 99</h4>
                            <a href="index.php?pagina=cita" class="btn btn-primary rounded-0 py-2 px-lg-4 mt-3 animated slideInDown">RESERVA TU CITA<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>					
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-primary py-1 px-4">Servicios</p>
                <h1 class="text-uppercase">¿Qué ofrecemos?</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="frontend/assets/img/haircut.png" alt="">
                        </div>
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Corte de Pelo</h3>
                            <p>Ofrecemos cortes de pelo personalizados, adaptados a tu estilo y necesidades, con resultados impecables y a la última moda.</p>
                        </div>
                        <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="frontend/assets/img/beard-trim.png" alt="">
                        </div>
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Recorte de Barba</h3>
                            <p>Realizamos un recorte detallado de tu barba, dándole la forma que mejor se adapte a tu rostro para un look fresco y pulido.</p>
                        </div>
                        <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="frontend/assets/img/mans-shave.png" alt="">
                        </div>
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Afeitado de Hombre</h3>
                            <p>Disfruta de un afeitado clásico y suave, con un acabado impecable, para una sensación de frescura y comodidad.</p>

                        </div>
                        <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="frontend/assets/img/hair-dyeing.png" alt="">
                        </div>
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Tinte de Cabello</h3>
                            <p>Transformamos tu look con un tinte de cabello de alta calidad, ofreciendo colores vibrantes y duraderos que se adaptan a tu estilo.</p>
                        </div>
                        <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="frontend/assets/img/mustache.png" alt="">
                        </div>
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Trenzas de Cabello</h3>
                            <p>Técnica que entrelaza el cabello en diferentes patrones, ofreciendo un look estilizado, práctico y único. Ideal para cualquier ocasión.</p>
                        </div>
                        <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="frontend/assets/img/stacking.png" alt="">
                        </div>
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Alisado Brasileño</h3>
                            <p>Tratamiento que suaviza el cabello, eliminando el frizz y dejándolo liso, brillante y manejable por más tiempo. Perfecto para un acabado suave y duradero.</p>
                        </div>
                        <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Price Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
                        <p class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">Precios y Planes</p>
                        <h1 class="text-uppercase mb-4">Consulta nuestros precios y servicios de peluqueria</h1>
                        <div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Corte de Pelo</h6>
                                <span class="text-uppercase text-primary">29.00€</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Recorte de Barba</h6>
                                <span class="text-uppercase text-primary">19.00€</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Afeitado de Hombre</h6>
                                <span class="text-uppercase text-primary">15.00€</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Tinte de Cabello</h6>
                                <span class="text-uppercase text-primary">39.00€</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Trenzas de Cabello</h6>
                                <span class="text-uppercase text-primary">25.00€</span>
                            </div>
                            <div class="d-flex justify-content-between py-2">
                                <h6 class="text-uppercase mb-0">Alisado Brasileño</h6>
                                <span class="text-uppercase text-primary">49.00€</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100">
                        <img class="img-fluid h-100" src="frontend/assets/img/price.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Price End -->
	
<!-- Productos Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block bg-secondary text-primary py-1 px-4">Productos</p>
            <h1 class="text-uppercase">Lo que ofrecemos</h1>
        </div>

        <div class="row g-4">
            <!-- Producto 1 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="product-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                    <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                        <img class="img-fluid" src="frontend/assets/img/pro.png" alt="Shaving Cream">
                    </div>
                    <div class="ps-4">
                        <h3 class="text-uppercase mb-3">Shaving Cream</h3>
                        <p>Crema de afeitar premium para un afeitado suave y confortable, dejando la piel suave y fresca.</p>
                        <span class="text-uppercase text-primary">Desde 20€</span>
                    </div>
                    <a class="btn btn-square" href="#"><i class="fa fa-plus text-primary"></i></a>
                </div>
            </div>

            <!-- Producto 2 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="product-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                    <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                        <img class="img-fluid" src="frontend/assets/img/product2.jpg" alt="Beard Oil">
                    </div>
                    <div class="ps-4">
                        <h3 class="text-uppercase mb-3">Beard Oil</h3>
                        <p>Aceite de barba de alta calidad para nutrir, suavizar y darle un brillo saludable a tu barba.</p>
                        <span class="text-uppercase text-primary">Desde 18€</span>
                    </div>
                    <a class="btn btn-square" href="#"><i class="fa fa-plus text-primary"></i></a>
                </div>
            </div>

            <!-- Producto 3 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="product-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                    <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                        <img class="img-fluid" src="frontend/assets/img/product3.jpg" alt="Hair Styling Wax">
                    </div>
                    <div class="ps-4">
                        <h3 class="text-uppercase mb-3">Hair Styling Wax</h3>
                        <p>Cera de peinado con alta fijación y acabado mate, ideal para cualquier estilo.</p>
                        <span class="text-uppercase text-primary">Desde 15€</span>
                    </div>
                    <a class="btn btn-square" href="#"><i class="fa fa-plus text-primary"></i></a>
                </div>
            </div>

            <!-- Producto 4 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="product-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                    <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                        <img class="img-fluid" src="frontend/assets/img/product4.jpg" alt="Shampoo">
                    </div>
                    <div class="ps-4">
                        <h3 class="text-uppercase mb-3">Shampoo</h3>
                        <p>Champú nutritivo para cabello, que limpia y deja una sensación de frescura y vitalidad.</p>
                        <span class="text-uppercase text-primary">Desde 12€</span>
                    </div>
                    <a class="btn btn-square" href="#"><i class="fa fa-plus text-primary"></i></a>
                </div>
            </div>

            <!-- Producto 5 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                <div class="product-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                    <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                        <img class="img-fluid" src="frontend/assets/img/product5.jpg" alt="Hair Gel">
                    </div>
                    <div class="ps-4">
                        <h3 class="text-uppercase mb-3">Hair Gel</h3>
                        <p>Gel para el cabello con fijación extra, para mantener tu peinado perfecto durante todo el día.</p>
                        <span class="text-uppercase text-primary">Desde 10€</span>
                    </div>
                    <a class="btn btn-square" href="#"><i class="fa fa-plus text-primary"></i></a>
                </div>
            </div>

            <!-- Producto 6 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1.1s">
                <div class="product-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                    <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                        <img class="img-fluid" src="frontend/assets/img/product6.jpg" alt="Beard Comb">
                    </div>
                    <div class="ps-4">
                        <h3 class="text-uppercase mb-3">Beard Comb</h3>
                        <p>Peine de barba de madera de alta calidad, perfecto para mantener tu barba ordenada y suave.</p>
                        <span class="text-uppercase text-primary">Desde 8€</span>
                    </div>
                    <a class="btn btn-square" href="#"><i class="fa fa-plus text-primary"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Productos End -->





    <!-- Working Hours Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100">
                        <img class="img-fluid h-100" src="frontend/assets/img/open.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
                        <p class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">Horario de Atención</p>
                        <h1 class="text-uppercase mb-4">Los mejores peluqueros están listos para atenderte</h1>
                        <div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Lunes</h6>
                                <span class="text-uppercase">09 AM - 08 PM</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Martes</h6>
                                <span class="text-uppercase">09 AM - 08 PM</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Miércoles</h6>
                                <span class="text-uppercase">09 AM - 08 PM</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Jueves</h6>
                                <span class="text-uppercase">09 AM - 08 PM</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Viernes</h6>
                                <span class="text-uppercase">09 AM - 08 PM</span>
                            </div>
                            <div class="d-flex justify-content-between py-2">
                                <h6 class="text-uppercase mb-0">Sáb / Dom</h6>
                                <span class="text-uppercase text-primary">Cerrado</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Working Hours End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-primary py-1 px-4">Testimonial</p>
                <h1 class="text-uppercase">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='frontend/assets/img/testimonial-1.jpg' alt=''>">
                    <h4 class="text-uppercase">Client Name</h4>
                    <p class="text-primary">Profession</p>
                    <span class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='frontend/assets/img/testimonial-2.jpg' alt=''>">
                    <h4 class="text-uppercase">Client Name</h4>
                    <p class="text-primary">Profession</p>
                    <span class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='frontend/assets/img/testimonial-3.jpg' alt=''>">
                    <h4 class="text-uppercase">Client Name</h4>
                    <p class="text-primary">Profession</p>
                    <span class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</span>
                </div>
            </div>      
        </div>
    </div>
    <!-- Testimonial End -->


<?php
incluirTemplate('footer');
?>