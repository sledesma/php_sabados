<?php

/**
 * $ruta (string) - La ruta del archivo .csv
 * 
 * Retorna: un array asociativo en donde las claves se obtienen a partir de la primera fila
 */
function csv_read_all($ruta) {
  $stream = fopen($ruta, 'r');
  $cabeceras = false;
  $salida = [];
  $actual = fgetcsv($stream); // lee el inicial
  while ($actual != false){ 
    if($cabeceras == false) {
      // Si cabeceras no tiene un valor, la fila actual serán las cabeceras
      $cabeceras = $actual;
    } else {
      $resultado = array_combine($cabeceras, $actual);
      array_push($salida, $resultado);
    }
    $actual = fgetcsv($stream); // lee el siguiente
  }; 
  fclose($stream);
  return $salida;
}
