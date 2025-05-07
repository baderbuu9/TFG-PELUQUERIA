<?php
require_once 'config/db.php';

session_start();

// Obtener los datos del formulario
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$recordar = isset($_POST['recordar']);

// Validar que los campos no estén vacíos
if (empty($email) || empty($password)) {
    $_SESSION['error'] = "Por favor, ingresa tu email y contraseña.";
    header("Location: ../index.php?pagina=login");
    exit();
}

// Verificar si el email existe
if ($db->emailExiste($email)) {
    // Obtener el usuario desde la base de datos
    $usuario = $db->obtenerUsuarioPorEmail($email);

    // Verificar la contraseña
    if ($usuario && password_verify($password, $usuario['password'])) {
        $_SESSION['usuario_id'] = $usuario['id_usuario'];
        $_SESSION['nombre'] = $usuario['nombre'];
        $_SESSION['rol'] = $usuario['rol'];

        // Si se marcó "Recordar sesión"
        if ($recordar) {
            setcookie('usuario_id', $usuario['id_usuario'], time() + (86400 * 30), "/");
            setcookie('nombre', $usuario['nombre'], time() + (86400 * 30), "/");
        }

        // Redirigir al dashboard
        header("Location: ../index.php?pagina=inicio");
        exit();
    } else {
        $_SESSION['error'] = "Contraseña incorrecta.";
        header("Location: ../index.php?pagina=login_cliente");
        exit();
    }
} else {
    $_SESSION['error'] = "El email no está registrado.";
    header("Location: ../index.php?pagina=login_cliente");
    exit();
}
?>
