<?php

function data_productos_getall($conn) {
  $sql = "SELECT * FROM productos";
  $result = mysqli_query($conn, $sql);
  $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
  return $data;
  /*
  return [
    [ 'id' => 1, 'descripcion' => 'Zapatos', 'precio' => 2500 ],
    [ 'id' => 2, 'descripcion' => 'Remeras', 'precio' => 2000 ],
    [ 'id' => 3, 'descripcion' => 'Lentes', 'precio' => 4500 ],
    [ 'id' => 4, 'descripcion' => 'Mouse', 'precio' => 500 ],
    [ 'id' => 5, 'descripcion' => 'Teclado', 'precio' => 1000 ],
  ];
  */
}

