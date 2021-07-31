<?php

session_start();

require_once 'controllers/productos.php';

if(isset($_GET['action'])) {

  switch($_GET['action']) {

    case 'ver_carrito':
      controllers_productos_vercarrito();
      break;

    case 'agregar_carrito':
      controllers_productos_agregaralcarrito($_GET['id']);
      break;

    default:
      header('Location: index.php');
      break;

  }

} else {
  controllers_productos_inicio();
}



