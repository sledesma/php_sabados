<?php

function home_obtener_posts($posts) {
  // Las llaves de una funcion PHP son, prácticamente, OTRO CÓDIGO

  $salida = [];

  for ($i=0; $i < count($posts); $i++) { 
    $postActual = $posts[$i];
    array_push($salida, [
      "titulo" => $postActual["titulo"], 
      "subtitulo" => $postActual["subtitulo"],
      "usuario" => $postActual["usuario"],
      "fecha" => $postActual["fecha"]
    ]);
  }

  return $salida;
}

function post_obtener_post($posts, $id) {
  $salida = [];

  for ($i=0; $i < count($posts); $i++) { 
    if($i == $id) {
      $salida = $posts[$i];
    }
  }

  return $salida;
}