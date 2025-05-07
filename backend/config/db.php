<?php
// Leer el archivo de configuración
$config = parse_ini_file('config.ini');

// Definir las variables de conexión
$host = $config['host'];
$port = $config['port'];
$dbname = $config['dbname'];
$usuario = $config['usuario'];
$password = $config['password'];

$pdo = new PDO("mysql:host={$host};port={$port};dbname={$dbname}", $usuario, $password);


class PeluqueriaDB {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

     // Función para verificar si el email existe
public function emailExiste($email) {
    $sql = "SELECT id_usuario FROM usuarios WHERE email = ?";
    $sentencia = $this->pdo->prepare($sql);
    $sentencia->execute([$email]);
    return $sentencia->rowCount() > 0;
}

// Función para insertar usuario
public function insertarUsuario($nombre, $apellidos, $email, $telefono, $password, $rol) {
    $sql = "INSERT INTO usuarios (nombre, apellidos, email, telefono, password, rol) VALUES (?, ?, ?, ?, ?, ?)";
    $sentencia = $this->pdo->prepare($sql);
    return $sentencia->execute([$nombre, $apellidos, $email, $telefono, $password, $rol]);
}

// Función para obtener el usuario por email
public function obtenerUsuarioPorEmail($email) {
    $sql = "SELECT id_usuario, nombre, password, rol FROM usuarios WHERE email = ?";
    $sentencia = $this->pdo->prepare($sql);
    $sentencia->execute([$email]);
    return $sentencia->fetch(PDO::FETCH_ASSOC);
}

// Función para retornar productos 
public function retornarProductos() {
    $sql = "SELECT id_producto, nombre, precio, imagen FROM productos";
    $sentencia = $this->pdo->prepare($sql);
    $sentencia->execute();
    return $sentencia;
}

// Función para retornar un producto específico por ID
public function retornarProductoPorId($id) {
    $sql = "SELECT id_producto, nombre, precio, imagen FROM productos WHERE id_producto = :id"; 
    $sentencia = $this->pdo->prepare($sql);
    $sentencia->execute([':id' => $id]);
    return $sentencia;
}
	
	
}

// Instancia global
$db = new PeluqueriaDB($pdo);
?>