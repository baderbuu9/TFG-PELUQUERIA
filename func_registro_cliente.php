<?php
// Incluir archivo de conexión a la base de datos
require_once 'backend/config/db.php';

// Verificar que el formulario ha sido enviado por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'] ?? '';
    $apellidos = $_POST['apellidos'] ?? '';
    $email = $_POST['email'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirmar_password = $_POST['confirmar_password'] ?? '';
    $rol = $_POST['rol'] ?? 'cliente';

    // Validar datos
    $errores = [];

    // Validar que no estén vacíos
    if (empty($nombre)) $errores[] = "El nombre es obligatorio";
    if (empty($apellidos)) $errores[] = "Los apellidos son obligatorios";
    if (empty($email)) $errores[] = "El email es obligatorio";
    if (empty($telefono)) $errores[] = "El teléfono es obligatorio";
    if (empty($password)) $errores[] = "La contraseña es obligatoria";

    // Validar formato de email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El formato del email no es válido";
    }

    // Validar longitud de contraseña
    if (strlen($password) < 6) {
        $errores[] = "La contraseña debe tener al menos 6 caracteres";
    }

    // Validar que las contraseñas coincidan
    if ($password !== $confirmar_password) {
        $errores[] = "Las contraseñas no coinciden";
    }

    // Verificar si el email ya existe
    $query = "SELECT COUNT(*) as count FROM usuarios WHERE email = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$email]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($result['count'] > 0) {
        $errores[] = "Este email ya está registrado";
    }

    // Si hay errores, redirigir de vuelta al formulario
    if (!empty($errores)) {
        // Guardar errores en sesión
        session_start();
        $_SESSION['errores_registro'] = $errores;
        $_SESSION['datos_form'] = [
            'nombre' => $nombre,
            'apellidos' => $apellidos,
            'email' => $email,
            'telefono' => $telefono
        ];
        
        // Redirigir
        header('Location: index.php?pagina=registro_cliente');
        exit;
    }

    // Si no hay errores, proceder con el registro
    try {
        // Hashear la contraseña
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        
        // Preparar la consulta de inserción
        $query = "INSERT INTO usuarios (email, contraseña, nombre, apellidos, telefono, rol) 
                  VALUES (?, ?, ?, ?, ?, ?)";
        
        $stmt = $pdo->prepare($query);
        $stmt->execute([$email, $password_hash, $nombre, $apellidos, $telefono, $rol]);
        
        // Iniciar sesión de usuario
        session_start();
        $_SESSION['registro_exitoso'] = true;
        $_SESSION['usuario_nombre'] = $nombre;
        
        // Redirigir al login
        header('Location: index.php?pagina=login_cliente&registro=exitoso');
        exit;
        
    } catch (PDOException $e) {
        // Manejar error de base de datos
        session_start();
        $_SESSION['error_db'] = "Error al registrar usuario: " . $e->getMessage();
        header('Location: index.php?pagina=registro_cliente');
        exit;
    }
} else {
    // Si no se envió por POST, redirigir al formulario
    header('Location: index.php?pagina=registro_cliente');
    exit;
}