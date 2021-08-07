drop database test;
create database argos;
USE argos;
create table users(
	id INT AUTO_INCREMENT,
    username VARCHAR(30),
    psw VARCHAR(20),
    es_admin BOOLEAN,
    nombre_apellido TEXT,
	PRIMARY KEY(id)
);
create table historial_compra(
    id_user INT,
    carrito TEXT,
    total INT,
    fecha_compra TIMESTAMP
);
create table articulos(
	id VARCHAR(6),
    nombre TEXT,
    descripcion TEXT,
    inventario INT,
    valor INT,
    PRIMARY KEY(id)
);

SHOW TABLES;
SELECT * FROM articulos;
SELECT * FROM historial_compra;
SELECT * FROM users;
-- DROP TABLE historial_compra;