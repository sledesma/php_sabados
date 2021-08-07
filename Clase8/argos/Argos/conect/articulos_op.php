<?php
require_once 'conexion.php';
function show_art($conect){
    $result = mysqli_query($conect, 'SELECT nombre, inventario, valor FROM articulos;');
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
};


function ingreso_articulo($conect){
    $nombreA=  $_POST['nombreArt'];
    $descripA= $_POST['descipcionArt'];
    $inventA= $_POST['invArt'];
    $valorA= $_POST['valorArt'];

    $op =  "INSERT INTO articulos (nombre, descipcion, inventario, valor) VALUES ('$nombreA','$descripA',$inventA,$valorA);";
    return mysqli_query($conect,$op);
};