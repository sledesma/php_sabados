<?php

require "conexion.php";
var_dump($_POST);

function ingreso_articulo($conect){
    $nombreA=  $_POST['nombreArt'];
    $descripA= $_POST['descipcionArt'];
    $inventA= $_POST['invArt'];
    $valorA= $_POST['valorArt'];

    $op =  "INSERT INTO articulos (nombre, descipcion, inventario, valor) VALUES ('$nombreA','$descripA',$inventA,$valorA);";
    return mysqli_query($conect,$op);
};

var_dump(ingreso_articulo($conexion));

