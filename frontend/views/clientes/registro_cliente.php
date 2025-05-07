<?php
// Incluir el encabezado
incluirTemplate('header');
?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Registro</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php?pagina=inicio">Inicio</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Registro</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Registration Start -->
<div class="container-xxl py-5">
    <div class="container d-flex justify-content-center">
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.2s">
            <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5 rounded">
                <p class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">Únete a Nosotros</p>
                <h1 class="text-uppercase mb-4">Crea Tu Cuenta</h1>
				
                <form action="backend/func_registro_cliente.php" method="POST">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control bg-transparent text-white <?php echo isset($_SESSION['errores']['nombre']) ? 'is-invalid' : ''; ?>" id="nombre" name="nombre" placeholder="Tu Nombre" required>
                                <label for="nombre">Nombre</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control bg-transparent text-white" id="apellidos" name="apellidos" placeholder="Tus Apellidos" required>
                                <label for="apellidos">Apellidos</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="email" class="form-control bg-transparent text-white" id="email" name="email" placeholder="Tu Email" required>
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="tel" class="form-control bg-transparent text-white" id="telefono" name="telefono" placeholder="Tu Teléfono" required>
                                <label for="telefono">Teléfono</label>
                            </div>
                        </div>
                        <div class="col-12">
							<div class="form-floating position-relative">
								<input type="password" class="form-control bg-transparent text-white" id="password" name="password" placeholder="Contraseña" required>
								<label for="password">Contraseña</label>
								<span class="position-absolute top-50 end-0 translate-middle-y pe-3" style="cursor: pointer;">
									<i class="fa fa-eye-slash toggle-password" data-target="password"></i>
								</span>
							</div>
						</div>
						<div class="col-12">
							<div class="form-floating position-relative">
								<input type="password" class="form-control bg-transparent text-white" id="confirmar-password" name="confirmar_password" placeholder="Confirmar Contraseña" required>
								<label for="confirmar-password">Confirmar Contraseña</label>
								<span class="position-absolute top-50 end-0 translate-middle-y pe-3" style="cursor: pointer;">
									<i class="fa fa-eye-slash toggle-password" data-target="confirmar-password"></i>
								</span>
							</div>
						</div>

                        <!-- Campo oculto para enviar rol como cliente -->
                        <input type="hidden" name="rol" value="cliente">

                        <div class="col-12">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="terminos" required>
                                <label class="form-check-label text-white" for="terminos">Acepto los términos y condiciones</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Registrarse</button>
                        </div>
                    </div>
                </form>
                <div class="text-center mt-4">
                    <p class="text-white mb-0">¿Ya tienes una cuenta? <a href="index.php?pagina=login_cliente" class="text-primary">Inicia sesión aquí</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Registration End -->


    <!-- Benefits Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-primary py-1 px-4">Beneficios</p>
                <h1 class="text-uppercase">¿Por qué registrarse?</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="fa fa-calendar-alt fa-2x text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Reservas Online</h3>
                            <p>Agenda tus citas fácilmente desde cualquier dispositivo sin necesidad de llamar.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="fa fa-percentage fa-2x text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Descuentos Exclusivos</h3>
                            <p>Accede a promociones especiales y descuentos solo disponibles para miembros registrados.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="fa fa-home fa-2x text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Servicio a Domicilio</h3>
                            <p>Disfruta de nuestros servicios de barbería profesional en la comodidad de tu hogar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Benefits End -->
	
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Seleccionar todos los iconos de ojo
    const toggleButtons = document.querySelectorAll('.toggle-password');
    
    toggleButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Obtener el campo de contraseña asociado
            const targetId = this.getAttribute('data-target');
            const passwordField = document.getElementById(targetId);
            
            // Cambiar el tipo de campo
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            
            // Cambiar el icono
            this.classList.toggle('fa-eye-slash');
            this.classList.toggle('fa-eye');
        });
    });
});
</script>

<?php
incluirTemplate('footer');
?>