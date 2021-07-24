create database tienda_juegos;

use tienda_juegos;

create table juego (
  codArticulo TEXT,
  genero TEXT,
  nombre TEXT,
  stock INT,
  fechaAlta TIMESTAMP DEFAULT current_timestamp()
)

insert into juego (codArticulo, genero, nombre, stock)
values ('A-150', 'Estrategia', 'Age of Empires II', 20);
