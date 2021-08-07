<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'argos');

$conexion = mysqli_connect(HOST, USER, PASS, DB);

$error = mysqli_errno($conexion);
if($error){
    echo 'Error: '.$error;
}