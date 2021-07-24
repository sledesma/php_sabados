<?php

// Este archivo tiene el único propósito de conectarse y consultar a una base de datos

function datos_juego_getall($conn) {
  $sql = "SELECT * FROM juego";
  $result = mysqli_query($conn, $sql);
  $datos = mysqli_fetch_all($result, MYSQLI_ASSOC);
  return $datos;
}

function datos_juego_existe($conn, $clave) {
  $sql = "SELECT COUNT(*) AS Cantidad FROM juego WHERE codArticulo = '$clave'";
  $result = mysqli_query($conn, $sql);
  $datos = mysqli_fetch_assoc($result);
  $cantidad = $datos['Cantidad'];

  if($cantidad > 0) {
    return true;
  } else {
    return false;
  }
}

function datos_juego_crear($conn, $articulo) {
  $codArticulo  = $articulo['codArticulo'];
  $genero       = $articulo['genero'];
  $nombre       = $articulo['nombre'];
  $stock        = $articulo['stock'];
  $fechaAlta    = $articulo['fechaAlta'];

  if(datos_juego_existe($conn, $codArticulo)) {
    // throw new Exception("El juego ya existe", 1);
    return false;
  } else {
    $sql = "insert into juego (codArticulo, genero, nombre, stock, fechaAlta) values ('$codArticulo', '$genero', '$nombre', $stock, '$fechaAlta')";
    $result = mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
  }

}