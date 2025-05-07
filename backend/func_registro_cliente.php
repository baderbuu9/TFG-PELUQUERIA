<?php
require_once 'config/db.php';

session_start();

// Verificar que la solicitud sea POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoger los datos del formulario
    $nombre = trim($_POST['nombre'] ?? '');
    $apellidos = trim($_POST['apellidos'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $telefono = trim($_POST['telefono'] ?? '');
    $password = trim($_POST['password'] ?? '');
    $confirmar_password = trim($_POST['confirmar_password'] ?? '');
    $rol = trim($_POST['rol'] ?? 'cliente');
	
	$_SESSION['errores'] = [];

    // Validar campos obligatorios
    if (empty($nombre) || empty($apellidos) || empty($email) || empty($telefono) || empty($password) || empty($confirmar_password)) {
        $_SESSION['errores']['nombre'] = "Todos los campos son obligatorios.";
        header('Location: ../index.php?pagina=registro_cliente');
        exit;
    }

    // Validar formato de email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['errores']['email'] = "El formato del email no es válido.";
        header('Location: ../index.php?pagina=registro_cliente');
        exit;
    }

    // Validar que las contraseñas coincidan
    if ($password !== $confirmar_password) {
        $_SESSION['errores']['password'] = "Las contraseñas no coinciden.";
        header('Location: ../index.php?pagina=registro_cliente');
        exit;
    }

    // Verificar si el email ya existe
    if ($db->emailExiste($email)) {
        $_SESSION['errores']['email_existe'] = "El email ya está registrado. Por favor, utiliza otro o inicia sesión.";
        header('Location: ../index.php?pagina=registro_cliente');
        exit;
    }

    // Cifrar la contraseña
    $hash_password = password_hash($password, PASSWORD_DEFAULT);

    // Insertar el nuevo usuario
    if ($db->insertarUsuario($nombre, $apellidos, $email, $telefono, $hash_password, $rol)) {
        // Registro exitoso
        $_SESSION['success'] = "¡Registro exitoso! Ahora puedes iniciar sesión.";
        header('Location: ../index.php?pagina=login_cliente');
        exit;
    } else {
        // Error en la inserción
        $_SESSION['errores']['error'] = "Hubo un error al registrar tu cuenta. Por favor, inténtalo de nuevo.";
        header('Location: ../index.php?pagina=registro_cliente');
        exit;
    }
} else {
    // Si no es una solicitud POST, redirigir al formulario de registro
    header('Location: ../index.php?pagina=registro_cliente');
    exit;
}
?>