<?php
/**
 * Inicializaciones
**/

// Incluir archivos necesarios
include "php/variables.php";

// Inicializar las variables necesarias
$estilos = $_GET["style"]; // index.php?style=estilos2.css
$colorTexto = "#333";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsive -->
  <title>Document</title>
  <link rel="stylesheet" href="css/<?php echo $estilos ?>">
</head>
<body>
  <h2 style="color: <?php echo $colorTexto ?>; font-family: Arial">
    <?php echo $titulo ?>
  </h2>
  <ul>
    <li><a href="index.php?style=estilos1.css">Estilos rojos</a></li>
    <li><a href="index.php?style=estilos2.css">Estilos azules</a></li>
  </ul>
</body>
</html>