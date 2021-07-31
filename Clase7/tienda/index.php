<?php

// Router

session_start();

require_once 'controllers/productos.php';
require_once 'controllers/admin.php';


switch($_SERVER['REQUEST_METHOD']) {
  // Peticiones GET
  case 'GET':
    if(isset($_GET['action'])) {

      switch($_GET['action']) {

        case 'ver_carrito':
          controllers_productos_vercarrito();
          break;

        case 'agregar_carrito':
          controllers_productos_agregaralcarrito($_GET['id']);
          break;

        case 'cerrar_sesion':
          session_unset();
          session_destroy();
          header('Location: index.php');

        case 'admin':
          controllers_admin_inicio();
          break;

        case 'admin_login':
          controllers_admin_login();
          break;

        default:
          header('Location: index.php');
          break;

      }

    } else {
      controllers_productos_inicio();
    }
    break;

    // Peticiones POST
    case 'POST':

      switch($_POST['action']) {

        case 'admin_carga_masiva':
          controllers_admin_cargamasiva();
          break;

      }
}




/*
$decision = [

  'GET' => [
    'ver_carrito' => 'controllers_productos_vercarrito',
    'agregar_carrito' => 'controllers_productos_agregaralcarrito'
  ],

  'POST' => []

];

$params = $_GET;

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $params = $_POST;
}

call_user_func($decision[$_SERVER['REQUEST_METHOD']][$params['action']]);
*/