<?php
// Incluir el encabezado
incluirTemplate('header');
?>

    <!-- 404 Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">404</h1>
                    <h1 class="mb-4">Página No Encontrada</h1>
                    <p class="mb-4">Lo sentimos, la página que estás buscando no existe en nuestro sitio web. ¿Tal vez ir a nuestra página principal o intentar usar la búsqueda?</p>
                    <a class="btn btn-primary py-3 px-5" href="index.php">Volver al Inicio</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->

   <!-- Footer Start -->
<?php
    incluirTemplate('footer');
?>
<!-- Footer End -->
