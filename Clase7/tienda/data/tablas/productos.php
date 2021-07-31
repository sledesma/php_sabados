<?php

function data_productos_getall($conn) {
  $sql = "SELECT * FROM productos";
  $result = mysqli_query($conn, $sql);
  $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
  return $data;
}

function data_productos_crear($conn, $descripcion, $precio) {
  $sql = "INSERT INTO productos (descripcion, precio) VALUES ('$descripcion', $precio)";
  $result = mysqli_query($conn, $sql);
  return mysqli_affected_rows($conn);
}