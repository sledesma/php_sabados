<?php

function controllers_admin_inicio() {

  if(isset($_SESSION['admin'])) {
    require_once 'data/conexion.php';
    require_once 'data/tablas/productos.php';

    $productos = data_productos_getall($dbConnection);
    require_once 'pages/admin/inicio.php';
  } else {
    require_once 'pages/admin/login.php';
  }
}

function controllers_admin_login() {
  require_once 'data/conexion.php';
  require_once 'data/tablas/usuarios.php';
  $usuarioExiste = data_usuarios_existe(
    $dbConnection,
    $_GET['txtUsuario'],
    $_GET['txtClave']
  );

  if($usuarioExiste) {
    $_SESSION['admin'] = [
      'user' => $_GET['txtUsuario'],
      'pass' => $_GET['txtClave']
    ];
  }

  header('Location: index.php?action=admin');
}


function controllers_admin_cargamasiva() {
  var_dump($_POST); // Datos NO BINARIOS que se mandan por POST
  echo "<hr />";

  if($_FILES['archivoCSV']['type'] == 'text/csv') {

    require_once 'data/conexion.php';
    require_once 'data/tablas/productos.php';

    $datos = csv_read_all($_FILES['archivoCSV']['tmp_name']); // Datos BINARIOS que se mandan por POST

    foreach ($datos as $producto) {
      $resultado = data_productos_crear($dbConnection, $producto['descripcion'], $producto['precio']);
      if($resultado > 0) {
        echo 'Correcto<br>';
      } else {
        echo 'Error<br>';
      }
    }

  }

  header('Location: index.php?action=admin');
}

function csv_read_all($ruta) {
  $stream = fopen($ruta, 'r');
  $cabeceras = false;
  $salida = [];
  $actual = fgetcsv($stream); // lee el inicial
  while ($actual != false){ 
    if($cabeceras == false) {
      // Si cabeceras no tiene un valor, la fila actual serán las cabeceras
      $cabeceras = $actual;
    } else {
      $resultado = array_combine($cabeceras, $actual);
      array_push($salida, $resultado);
    }
    $actual = fgetcsv($stream); // lee el siguiente
  }; 
  fclose($stream);
  return $salida;
}
