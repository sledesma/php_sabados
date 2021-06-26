<?php

// Estructuras de datos (Variables, etc) - INGREDIENTES del código
$user = $_GET["txtUsuario"];
$pass = $_GET["txtClave"];

// Algoritmo (Pasos, salidas, etc) - PASOS del código
if($user == 'admin' && $pass == '1234') {
  header('Location: ../welcome.php');
} else {
  header('Location: ../index.php?err=1');
}
