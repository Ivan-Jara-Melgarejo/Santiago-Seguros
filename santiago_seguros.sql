/*         

                    SQL

CREATE DATABASE santiago_seguros;


USE santiago_seguros;

CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    tipo_seguro VARCHAR(50) NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO clientes (nombre, apellido, telefono, correo, tipo_seguro)
VALUES
('Juan', 'Pérez', '987654321', 'juan.perez@example.com', 'Seguro de Salud'),
('María', 'González', '987654322', 'maria.gonzalez@example.com', 'Seguro de Vida'),
('Carlos', 'Soto', '987654323', 'carlos.soto@example.com', 'Seguro de Automóvil'),
('Ana', 'Ramírez', '987654324', 'ana.ramirez@example.com', 'Seguro de Hogar'),
('Jorge', 'Díaz', '987654325', 'jorge.diaz@example.com', 'Seguro de Desgravamen');
 */