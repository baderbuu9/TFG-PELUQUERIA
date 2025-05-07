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

        // Función para obtener los servicios de la base de datos
        public function retornarServicios() {
            $sql = "SELECT * FROM servicios";
            $sentencia = $this->pdo->prepare($sql);
            $sentencia->execute();
            return $sentencia;
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
	
	
	
	
	
}

// Instancia global
$db = new PeluqueriaDB($pdo);
?>