<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Remagio Barbershop - Style Connect</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="frontend/assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Oswald:wght@600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="frontend/assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="frontend/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="frontend/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="frontend/assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Cargando...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-secondary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.0s">
        <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
            <img src="frontend/assets/img/logo.png" alt="Logo"
                style="height: 80px; max-height: 100%; position: relative; top: 0; transform: scale(2);">
        </a>

        <div class="d-flex align-items-center flex-shrink-0 me-2">
        <a href="index.php?pagina=login_cliente" class="btn btn-primary rounded-0 py-2 px-3 ms-4 me-3 d-flex align-items-center">
            <i class="fas fa-door-open me-2"></i><span>Entrar</span>
        </a>
        <a href="index.php?pagina=registro_cliente" class="btn btn-primary rounded-0 py-2 px-3 me-3 d-flex align-items-center">
            <i class="fas fa-user-plus me-2"></i><span>Registrarse</span>
        </a>
    </div>

        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Inicio</a>
                <a href="index.php?pagina=nosotros" class="nav-item nav-link">Sobre Nosotros</a>
                <a href="index.php?pagina=productos" class="nav-item nav-link">Nuestros Productos</a>
                <a href="index.php?pagina=service" class="nav-item nav-link">Servicios</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Menu</a>
                    <div class="dropdown-menu dropdown-menu-dark bg-secondary border-0 shadow">
                        <a href="index.php?pagina=price" class="dropdown-item">Pricing Plan</a>
                        <a href="index.php?pagina=team" class="dropdown-item">Our Barber</a>
                        <a href="index.php?pagina=open" class="dropdown-item">Working Hours</a>
                        <a href="index.php?pagina=testimonial" class="dropdown-item">Testimonial</a>
                        <a href="index.php?pagina=404" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="index.php?pagina=contacto" class="nav-item nav-link">Contacto</a>
            </div>
            <a href="index.php?pagina=cita" class="btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block">CITA PREVIA<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->