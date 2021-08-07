<?php

function articulos_crear($conexion, $artData) {
  if(
    !isset($artData['nombre']) ||
    !isset($artData['descripcion']) ||
    !isset($artData['inventario']) ||
    !isset($artData['valor'])
  ) {
    return false;
  }
  
  $sql = "INSERT INTO articulos (nombre, descripcion, inventario, valor) VALUES ('".$artData['nombre']."','".$artData['descripcion']."',".$artData['inventario'].",".$artData['valor'].") ";

  return $sql;
}

function articulos_editar($conexion, $idActual, $artData) {
  if(
    !isset($artData['nombre']) ||
    !isset($artData['descripcion']) ||
    !isset($artData['inventario']) ||
    !isset($artData['valor'])
  ) {
    return false;
  }
  
  $sql = "UPDATE articulos SET nombre = '".$artData['nombre']."', descripcion = '".$artData['descripcion']."', inventario = ".$artData['inventario'].", valor = ".$artData['valor']." WHERE id = ".$idActual."";

  return $sql;
}

function articulos_borrar($conexion, $idActual) {
  $sql = "DELETE FROM articulos WHERE id = ".$idActual."";

  return $sql;
}

function articulos_listar_todos($conexion) {
  $sql = "SELECT * FROM articulos";

  return $sql;
}

function articulos_listar_uno($conexion, $idActual) {
  $sql = "SELECT * FROM articulos WHERE id = ".$idActual."";

  return $sql;
}