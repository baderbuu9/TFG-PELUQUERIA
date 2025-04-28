-- Crear la base de datos
USE peluqueria_db;

-- Configuración para días no laborables (sábados y domingos bloqueados)
CREATE TABLE configuracion_negocio (
    id INT PRIMARY KEY DEFAULT 1,
    lunes_abierto BOOLEAN DEFAULT TRUE,
    martes_abierto BOOLEAN DEFAULT TRUE,
    miercoles_abierto BOOLEAN DEFAULT TRUE,
    jueves_abierto BOOLEAN DEFAULT TRUE,
    viernes_abierto BOOLEAN DEFAULT TRUE,
    sabado_abierto BOOLEAN DEFAULT FALSE,
    domingo_abierto BOOLEAN DEFAULT FALSE,
    hora_apertura TIME DEFAULT '09:00:00',
    hora_cierre TIME DEFAULT '20:00:00',
    politica_cancelacion TEXT DEFAULT 'No se aceptan devoluciones de productos. Las citas pueden ser canceladas únicamente por el administrador.'
);

-- Tabla usuarios
CREATE TABLE usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) UNIQUE NOT NULL,
    contraseña VARCHAR(255) NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    telefono VARCHAR(15) NOT NULL,
    rol ENUM('cliente', 'trabajador', 'administrador') NOT NULL,
    cancelaciones_consecutivas INT DEFAULT 0
);

-- Tabla trabajadores
CREATE TABLE trabajadores (
    id_trabajador INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,
    especialidad VARCHAR(100) NOT NULL,
    foto VARCHAR(255),
    activo BOOLEAN DEFAULT TRUE,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario) ON DELETE CASCADE
);

-- Tabla servicios
CREATE TABLE servicios (
    id_servicio INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(6,2) NOT NULL,
    duracion INT NOT NULL COMMENT 'Duración en minutos',
    disponible_domicilio BOOLEAN DEFAULT FALSE,
    imagen VARCHAR(255)
);

-- Tabla horarios_trabajador
CREATE TABLE horarios_trabajador (
    id_horario INT AUTO_INCREMENT PRIMARY KEY,
    id_trabajador INT NOT NULL,
    dia_semana ENUM('lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado', 'domingo') NOT NULL,
    hora_inicio TIME NOT NULL,
    hora_fin TIME NOT NULL,
    FOREIGN KEY (id_trabajador) REFERENCES trabajadores(id_trabajador) ON DELETE CASCADE
);

-- Tabla ausencias_trabajador
CREATE TABLE ausencias_trabajador (
    id_ausencia INT AUTO_INCREMENT PRIMARY KEY,
    id_trabajador INT NOT NULL,
    fecha_inicio DATE NOT NULL,
    fecha_fin DATE NOT NULL,
    motivo VARCHAR(255),
    FOREIGN KEY (id_trabajador) REFERENCES trabajadores(id_trabajador) ON DELETE CASCADE
);

-- Tabla citas
CREATE TABLE citas (
    id_cita INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT NOT NULL,
    id_trabajador INT NOT NULL,
    fecha DATE NOT NULL,
    hora_inicio TIME NOT NULL,
    hora_fin TIME NOT NULL,
    precio_total DECIMAL(6,2) NOT NULL,
    a_domicilio BOOLEAN DEFAULT FALSE,
    direccion TEXT,
    estado ENUM('pendiente', 'completada', 'cancelada') DEFAULT 'pendiente',
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_cliente) REFERENCES usuarios(id_usuario) ON DELETE CASCADE,
    FOREIGN KEY (id_trabajador) REFERENCES trabajadores(id_trabajador) ON DELETE CASCADE
);

-- Tabla servicios_cita
CREATE TABLE servicios_cita (
    id_servicio_cita INT AUTO_INCREMENT PRIMARY KEY,
    id_cita INT NOT NULL,
    id_servicio INT NOT NULL,
    precio DECIMAL(6,2) NOT NULL,
    FOREIGN KEY (id_cita) REFERENCES citas(id_cita) ON DELETE CASCADE,
    FOREIGN KEY (id_servicio) REFERENCES servicios(id_servicio) ON DELETE CASCADE
);

-- Tabla productos
CREATE TABLE productos (
    id_producto INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(6,2) NOT NULL,
    stock INT NOT NULL DEFAULT 0,
    imagen VARCHAR(255),
    categoria VARCHAR(50) NOT NULL
);

-- Tabla pedidos
CREATE TABLE pedidos (
    id_pedido INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    estado ENUM('pendiente', 'enviado a correos', 'completado', 'cancelado') DEFAULT 'pendiente',
    precio_total DECIMAL(7,2) NOT NULL,
    direccion_entrega TEXT NOT NULL,
    metodo_pago VARCHAR(50) NOT NULL,
    FOREIGN KEY (id_cliente) REFERENCES usuarios(id_usuario) ON DELETE CASCADE
);

-- Tabla productos_pedido
CREATE TABLE productos_pedido (
    id_producto_pedido INT AUTO_INCREMENT PRIMARY KEY,
    id_pedido INT NOT NULL,
    id_producto INT NOT NULL,
    cantidad INT NOT NULL,
    precio_unitario DECIMAL(6,2) NOT NULL,
    FOREIGN KEY (id_pedido) REFERENCES pedidos(id_pedido) ON DELETE CASCADE,
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto) ON DELETE CASCADE
);

-- Crear un usuario administrador por defecto
INSERT INTO usuarios (email, contraseña, nombre, apellidos, telefono, rol)
VALUES ('admin@peluqueria.com', '$2y$10$YQdG2yhFNKFZu3ReSohAKuJ3IFAUMcpEYQqRsHyPlFCaV02U2pRAe', 'Administrador', 'Sistema', '600000000', 'administrador');

-- Crear algunos productos de ejemplo
INSERT INTO productos (nombre, descripcion, precio, stock, imagen, categoria) VALUES
('Champú fortalecedor', 'Champú para el fortalecimiento del cabello', 12.50, 20, 'champu1.jpg', 'Champús'),
('Cera fijadora', 'Cera fijadora de alto agarre', 9.99, 15, 'cera.jpg', 'Fijadores'),
('Aceite para barba', 'Aceite hidratante para barba', 15.50, 10, 'aceite.jpg', 'Barbería'),
('Espuma de afeitar', 'Espuma para un afeitado suave', 7.25, 25, 'espuma.jpg', 'Afeitado'),
('Kit de barbería', 'Kit completo para el cuidado de la barba', 29.99, 5, 'kit.jpg', 'Barbería');
