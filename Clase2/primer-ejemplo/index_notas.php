<?php
// Otros archivos requeridos
include "php/variables.php";

// Variables
$style = $_GET["style"];
$estilos = $style;
$colorTexto = 'black';

// Programar para el lado del servidor / Backend = Programa para HTTP
/**
 * 1. Es un protocolo para las comunicaciones en la red
 * 2. Es un protocolo que opera bajo el modelo Cliente / Servidor
 * 3. Es un protocolo SIN ESTADO
 * 4. La petición tiene, principalmente, estos datos:
 *  - URI = LINK = http://localhost/php_sabados/Clase2/archivo.php?nombre=Alejandro
 *  - METODO
 *  - CUERPO
 *  - CABECERAS
 *    La respuesta tiene, principalmente, estos datos:
 *  - CUERPO
 *  - CABECERAS
 *  - ESTADO
**/

// Leer los parámetros que se pasan por URL (lo que viene despues de '?')
var_dump($_GET) // var_dump PROCESO DE DEPURACION (DEBUG)
// $_GET contiene TODOS los parametros que se pasan por URL

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/<?php echo $estilos ?>">
</head>
<body>
  <h2 style="color: <?php echo $colorTexto ?>">
    <?php echo $titulo ?>
  </h2>
  <script></script>
</body>
</html>
