<?php
incluirTemplate('header');
?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">¡Contáctanos!</h1>
        </div>
    </div>
    <!-- Page Header End -->


<!-- Contacto Inicio -->
<div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-secondary p-5">
                        <p class="d-inline-block bg-dark text-primary py-1 px-4">Contáctanos</p>
                        <h1 class="text-uppercase mb-4">¿Tienes alguna duda? ¡Contáctanos!</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="name" placeholder="Tu Nombre">
                                        <label for="name">Tu Nombre</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-transparent" id="email" placeholder="Tu Correo Electrónico">
                                        <label for="email">Tu Correo Electrónico</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="subject" placeholder="Asunto">
                                        <label for="subject">Asunto</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-transparent" placeholder="Deja tu mensaje aquí" id="message" style="height: 100px"></textarea>
                                        <label for="message">Mensaje</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Enviar Mensaje</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100" style="min-height: 400px;">
                        <iframe class="google-map w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.6793251151067!2d-3.766575364264442!3d40.23040543963922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd423b10b83d5317%3A0xbf2f60a84f5648f9!2sCalle%20Juan%20Austria%2C%206%2C%20Parla%2C%20Madrid!5e0!3m2!1ses!2ses!4v1672111958625!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                        frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0" style="filter: grayscale(100%) invert(92%) contrast(83%); border: 0;"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contacto Fin -->


<?php
incluirTemplate('footer');
?>