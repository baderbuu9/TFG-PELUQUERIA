<?php
// Incluir archivo de conexión a la base de datos
require_once 'backend/config/db.php';

// Incluir archivo helpers
require_once 'backend/helpers/template_function.php';

// Detectar la página solicitada
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'inicio';

// Estructura básica de enrutamiento
switch ($pagina) {
        case 'inicio': // nombre del archivo .php pero sin .php
                include 'frontend/views/inicio.php'; //ruta del archivo
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
	case 'contacto':
                include 'frontend/views/contacto.php'; 
                break;
	case 'cita':
                include 'frontend/views/cita.php'; 
                break;	
        case 'productos':
                include 'frontend/views/productos.php'; 
                break;
        case 'detalle_producto':
                include 'frontend/views/detalle_producto.php'; 
                break;
	default:
                include 'frontend/views/404.php';
                break;
}
?>