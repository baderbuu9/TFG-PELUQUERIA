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


// Verificar si la clase ya existe antes de declararla
if (!class_exists('PeluqueriaDB')) {
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
}
?>
