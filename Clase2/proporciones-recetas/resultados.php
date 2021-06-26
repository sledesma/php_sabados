<?php

// Estrucutras de datos (INGREDIENTES)

$data         = $_POST;

$harina       = $data["nHarina"];
$huevos       = $data["nHuevos"];
$leche        = $data["nLeche"];
$nuevaHarina  = $data["nNuevaHarina"];

$coeficiente  = 0;

$nuevosHuevos = 0;
$nuevaLeche   = 0;


// Algoritmo (PASOS)

// 1. Calcular el coeficiente
$coeficiente = $nuevaHarina / $harina;
// 2. Aplicar el coeficiente a cada ingrediente
$nuevosHuevos = $huevos * $coeficiente;
$nuevaLeche = $leche * $coeficiente;
// 3. Mostrar el resultado final en el HTML
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Proporciones para <?= $nuevaHarina ?> grs. de Harina</h2>
  <ul>
    <li>
      <span>Leche: </span> <span><?= $nuevaLeche ?></span>
    </li>
    <li>
      <span>Huevos: </span> <span><?= $nuevosHuevos ?></span>
    </li>
  </ul>
  <a href="index.php">Calcular otras proporciones</a>
</body>
</html>
