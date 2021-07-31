<?php

$depositoSesion = [ // SIMULANDO $_SESSION

  'sesion1' => [
    'nombre' => "Carla",
    'logueado' => false
  ],

  'sesion2' => [
    'nombre' => "Andrea",
    'logueado' => true
  ]

];

if(isset($_GET['sid'])) {
  session_id($_GET['sid']);
  session_start();
  echo session_id();

  $variablesSesion = $depositoSesion[session_id()];
  var_dump($variablesSesion);

  session_destroy();
} else {
  session_start();
  echo session_id();

  $variablesSesion = $depositoSesion[session_id()];
  var_dump($variablesSesion);

  session_destroy();
}
