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