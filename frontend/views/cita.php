    <!-- Encabezado de la Página Inicio --> 
    <?php
    // Incluir el encabezado
    incluirTemplate('header');

    //Conexión PeluqueriaDB 
    $peluqueria = new PeluqueriaDB($pdo);

    // Obtener los servicios
    $sentencia = $peluqueria->retornarServicios();
    ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">¡Agenda tu Cita!</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Formulario de Cita Start -->
    <section id="formulario-cita" class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="bg-secondary p-5 rounded shadow-lg">
                    <p class="d-inline-block bg-dark text-primary py-1 px-4">Agenda tu Cita</p>
                    <h1 class="text-uppercase mb-4">¡Coge tu cita con nosotros!</h1>
                    <form action="procesar_cita.php" method="POST">
                        <div class="row g-3">
                            <!-- Nombre Completo -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent text-white" id="nombre" name="nombre" placeholder="Tu Nombre" required>
                                    <label for="nombre">Tu Nombre</label>
                                </div>
                            </div>
                            <!-- Correo Electrónico -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-transparent text-white" id="email" name="email" placeholder="Tu Correo Electrónico" required>
                                    <label for="email">Tu Correo Electrónico</label>
                                </div>
                            </div>
                            <!-- Teléfono -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control bg-transparent text-white" id="telefono" name="telefono" placeholder="Tu Teléfono" required>
                                    <label for="telefono">Tu Teléfono</label>
                                </div>
                            </div>
                            <!-- Fecha de Cita -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control bg-transparent text-white" id="fecha" name="fecha" required>
                                    <label for="fecha">Fecha de Cita</label>
                                </div>
                            </div>
                            <!-- Hora de Cita -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-control bg-transparent text-white" id="hora" name="hora" required>
                                        <option value="" disabled selected>Seleccione una hora</option>
                                        <option value="09:00">09:00</option>
                                        <option value="09:20">09:20</option>
                                        <option value="09:40">09:40</option>
                                        <option value="10:00">10:00</option>
                                        <option value="10:00">10:20</option>
                                        <option value="10:40">10:40</option>
                                        <option value="11:00">11:00</option>
                                        <option value="11:20">11:20</option>
                                        <option value="11:40">11:40</option>
                                        <option value="12:00">12:00</option>
                                        <option value="12:20">12:20</option>
                                        <option value="12:40">12:40</option>
                                        <option value="13:00">13:00</option>
                                        <option value="13:20">13:20</option>
                                        <option value="13:40">13:40</option>
                                        <option value="14:00">14:00</option>
                                        <option value="14:20">14:20</option>
                                        <option value="14:40">14:40</option>
                                        <option value="15:00">15:00</option>
                                        <option value="15:20">15:20</option>
                                        <option value="15:40">15:40</option>
                                        <option value="16:00">16:00</option>
                                        <option value="16:20">16:20</option>
                                        <option value="16:40">16:40</option>
                                        <option value="17:00">17:00</option>
                                        <option value="17:20">17:20</option>
                                        <option value="17:40">17:40</option>
                                        <option value="18:00">18:00</option>
                                        <option value="18:20">18:20</option>
                                        <option value="18:40">18:40</option>
                                        <option value="19:00">19:00</option>
                                        <option value="19:20">19:20</option>
                                        <option value="19:40">19:40</option>
                                        <option value="20:00">20:00</option>
                                        <option value="20:20">20:20</option>
                                        <option value="20:40">20:40</option>
                                        <option value="21:00">21:00</option>
                                    </select>
                                    <label for="hora">Hora de Cita</label>
                                </div>
                            </div>
                            <!-- Servicio -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select bg-transparent text-white" id="servicio" name="servicio" required>
                                        <option value="" disabled selected>Seleccione un servicio</option>
                                        <?php while ($servicio = $sentencia->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <option value="<?= $servicio['id_servicio'] ?>"><?= $servicio['nombre'] ?></option>
                                        <?php } ?>
                                    </select>
                                    <label for="servicio">Selecciona un Servicio</label>
                                </div>
                            </div>

                            <!-- Botón de Confirmación -->
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Confirmar Cita</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Formulario de Cita End -->

    <!-- Footer Start -->
    <?php
        incluirTemplate('footer');
    ?>
    <!-- Footer End -->
