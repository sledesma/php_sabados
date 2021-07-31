<?php

function data_productos_getall($conn) {
  $sql = "SELECT * FROM productos";
  $result = mysqli_query($conn, $sql);
  $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
  return $data;
}

