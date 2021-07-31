<?php

function process_productos_inicio() {
  require_once 'data/productos.php';

  $productos = data_productos_getall();
  require_once 'pages/productos_todos.php';
}