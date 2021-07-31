<?php

require_once 'csv.php'; // Clase 5

if(isset($_GET['sym'])) { // Clase 1/2 - Verifica si una clave existe en un array

  $ruta = 'http://clasico.rava.com/empresas/precioshistoricos.php?e='.urlencode($_GET['sym']).'&csv=1';

  $datos = csv_read_all($ruta); // Clase 5

  $windowSize = 10;

  foreach ($datos as $i => $hist) { // Clase 2 / 3 => Recorre todos los registros
    if($i >= $windowSize) {
      $currentWindow = [];

      echo "<b>Fecha actual: ".$hist['fecha']." </b>";

      echo " | ";

      echo "<i>Cierre: ".$hist['cierre']."</i>";

      echo " | ";

      for ($j=$windowSize; $j >= 1 ; $j--) { 
          array_push($currentWindow, $datos[$i - $j]['cierre']);
      }
      
      $media = array_sum($currentWindow) / count($currentWindow);
      echo "<i>Media: ".$media." </i>";

      echo "<hr />";
    } else {
      echo "NO puedo operar<br>";
    }
  }

} else {
  echo 'Por favor, introducir el símbolo como parámetro de la URL sym';
}