<?php
// Incluir archivo de conexión a la base de datos
require_once 'backend/config/db.php';

// Incluir archivo helpers
require_once 'backend/helpers/template_function.php';

// Detectar la página solicitada
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'inicio';

// Estructura básica de enrutamiento
switch ($pagina) {
        case 'inicio':
                include 'frontend/views/inicio.php';
                break;
        case 'registro_cliente':
                include 'frontend/views/clientes/registro_cliente.php';
                break;
        case 'login_cliente':
                include 'frontend/views/clientes/login_cliente.php';
                break;
        case 'nosotros':
                include 'frontend/views/nosotros.php';
                break;
}
?>