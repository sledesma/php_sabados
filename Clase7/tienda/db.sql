create database tienda_clase7;

use tienda_clase7;

create table productos(
	id int not null auto_increment,
    descripcion varchar(150),
    precio int,
    primary key(id)
);