<?php

function usuarios_crear($conexion, $userData) {
  if(
    !isset($userData['username']) ||
    !isset($userData['psw']) ||
    !isset($userData['es_admin']) ||
    !isset($userData['nombre_apellido'])
  ) {
    return false;
  }
  
  $sql = "INSERT INTO users (username, psw, es_admin, nombre_apellido) VALUES ('".$userData['username']."','".$userData['psw']."',".$userData['es_admin'].",'".$userData['nombre_apellido']."') ";

  return $sql;
}

function usuarios_editar($conexion, $idActual, $userData) {
  if(
    !isset($userData['username']) ||
    !isset($userData['psw']) ||
    !isset($userData['es_admin']) ||
    !isset($userData['nombre_apellido'])
  ) {
    return false;
  }
  
  $sql = "UPDATE users SET username = '".$userData['username']."', psw = '".$userData['psw']."', es_admin = ".$userData['es_admin'].", nombre_apellido = '".$userData['nombre_apellido']."' WHERE id = ".$idActual."";

  return $sql;
}

function usuarios_borrar($conexion, $idActual) {
  $sql = "DELETE FROM users WHERE id = ".$idActual."";

  return $sql;
}

function usuarios_listar_todos($conexion) {
  $sql = "SELECT * FROM users";

  return $sql;
}

function usuarios_listar_uno($conexion, $idActual) {
  $sql = "SELECT * FROM users WHERE id = ".$idActual."";

  return $sql;
}

function usuarios_existe($conexion, $username, $pass) {
  $sql = "SELECT COUNT(*) as Cantidad FROM users WHERE username = '$username' AND psw = '$pass'";

  return $sql;
}