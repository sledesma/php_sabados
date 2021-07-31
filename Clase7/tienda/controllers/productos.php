<?php

function controllers_productos_inicio() {
  require_once 'data/productos.php';

  $productos = data_productos_getall();
  require_once 'pages/productos/inicio.php';
}

function controllers_productos_vercarrito() {
  $items = [];

  if(isset($_SESSION['carrito'])) {
    $items = $_SESSION['carrito'];
  }

  require_once 'pages/productos/carrito.php';
}

function controllers_productos_agregaralcarrito($id) {
  echo 'Agregando al carrito el producto '.$id;

  if(
    !isset($_SESSION['carrito']) || 
    !is_array($_SESSION['carrito'])) {

    $_SESSION['carrito'] = [];

  }
  array_push($_SESSION['carrito'], $id);

  // TODO: Que soporte multiples productos y reporte el precio total. Estructura del carrito:
  // [ id, precio, cantidad, total ]
}