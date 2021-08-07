<?php

session_start();

require_once 'conexion.php';
require_once 'functions.php';

switch($_SERVER['REQUEST_METHOD']) {

  case 'GET':

    if(isset($_GET['action'])) {
      switch($_GET['action']) {

        case 'cerrar_sesion':
          logout();
          header('Location: index.php');
          break;

        default:
          if(is_logged()) {
            require_once 'pages/admin.php';
          } else {
            require_once 'pages/login.php';
          }
          break;
      }
    } else {
      if(is_logged()) {
        require_once 'pages/admin.php';
      } else {
        require_once 'pages/login.php';
      }
    }

    break;


  case 'POST':

    if(isset($_POST['action'])) {
      switch($_POST['action']) {

        case 'login':
          if(!is_logged() && user_exists($conexion, $_POST['username'], $_POST['pass'])) {
            login_user($_POST['username']);
          }
          header('Location: index.php');
          break; 

      }
    }

    break;

}