<?php
incluirTemplate('header');
?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Iniciar Sesión</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php?pagina=inicio">Inicio</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Login</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Login Start -->
    <div class="container-xxl py-5">
        <div class="container d-flex justify-content-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.2s">
                <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5 rounded">
                    <p class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">Área de Clientes</p>
                    <h1 class="text-uppercase mb-4">Accede a tu Cuenta</h1>
                    
                    <form action="backend/func_login.php" method="POST">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-transparent text-white" id="email" name="email" placeholder="Tu Email" required>
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control bg-transparent text-white" id="password" name="password" placeholder="Contraseña" required>
                                    <label for="password">Contraseña</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="recordar">
                                    <label class="form-check-label text-white" for="recordar">Recordar mi sesión</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Iniciar Sesión</button>
                            </div>
                        </div>
                    </form>
                    <div class="text-center mt-4">
                        <p class="text-white mb-2">¿Olvidaste tu contraseña? <a href="index.php?pagina=recuperar_password" class="text-primary">Recupérala Aquí</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login End -->
     
<?php
incluirTemplate('footer');
?>