<?php
/**
 * El principal aporte de este archivo
 * es ofrecer un UNICO punto de acceso.
 * Todas las peticiones HTTP serán dirigidas a este archivo
**/

// Determinar la petición actual
$metodo = $_SERVER['REQUEST_METHOD'];

// Enviar la respuesta correspondiente a dicha petición
switch($metodo) {
  case "GET":
    $accion = isset($_GET['a']) ? $_GET['a'] : false; // condicion ? expresion_true : expresion_false
    $templates = [
      'contacto',
      'home',
      'ingreso',
      'producto',
      'productos',
      'registro'
    ];

    require_once "functions.php";
    require_once "resources/layout/header.php";
    if($accion != false) {
      if(array_search($accion, $templates) !== false) {
        require_once "resources/pages/".$accion.".php";
      } else {
        header('Location: index.php');
      }
    } else {
      require_once "resources/pages/home.php";
    }
    require_once "resources/layout/footer.php";
    break;

  case "POST":
    $postAction = $_POST['action'];

    switch($postAction) {

      case 'contacto':
        // procesarFormulario
        if(strlen($_POST['nombre']) < 3) {
          echo "El nombre tiene menos de tres caracteres";
        } else {
          echo "Nombre correcto";
        }
        break;

    }

    break;
}

