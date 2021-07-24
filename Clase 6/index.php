<?php

// INTEGRACIÓN

// requerir archivos necesarios
require_once "capa-datos/conexion.php";
require_once "capa-datos/tablas/juego.php";

// renderizar la página inicial

$juegos = datos_juego_getall($dbConnection);
require_once 'capa-interfaz/index.php';