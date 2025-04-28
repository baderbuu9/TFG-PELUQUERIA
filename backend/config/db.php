<?php

// Leer el archivo de configuración
$config = parse_ini_file('config.ini');

// Definir las variables de conexión
$host = $config['host'];
$port = $config['port'];
$dbname = $config['dbname'];
$usuario = $config['usuario'];
$password = $config['password'];

// Crear la conexión PDO simple
$pdo = new PDO("mysql:host={$host};port={$port};dbname={$dbname}", $usuario, $password);

?>