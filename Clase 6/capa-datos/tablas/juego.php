<?php

// Este archivo tiene el único propósito de conectarse y consultar a una base de datos

function datos_juego_getall($conn) {
  $sql = "SELECT * FROM juego";
  $result = mysqli_query($conn, $sql);
  $datos = mysqli_fetch_all($result, MYSQLI_ASSOC);
  return $datos;
}