<?php

require_once '../capa-datos/conexion.php';
require_once '../capa-datos/tablas/juego.php';

if(datos_juego_crear($dbConnection, $_POST) !== false) {
  header("Location: ../index.php");
} else {
  echo "Error";
}