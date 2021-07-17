<?php
/**
 * Propósito / Objetivo / Fin: Leer un archivo CSV
 */

/* 1) Pasos específicos y estrictamente necesarios */
// fgetcsv => Leer datos de un archivo CSV
/*
fgetcsv(
    resource $stream, <= NECESARIO
    int $length = 0, <= OPCIONAL
    string $separator = ",", <= OPCIONAL
    string $enclosure = '"', <= OPCIONAL
    string $escape = "\\" <= OPCIONAL
): array

 * LO QUE SE HASTA AHORA
 * ----------------------------
 * fgetcsv retornará un array con la fila actual o falso si no tiene más filas
 * fgetcsv tiene un parametro estrictamente necesario: resource $stream
 * $stream es un recurso a un archivo que se abre con fopen()
 * 
**/
/*
PARAMETROS OPCIONALES
mate (recipiente, bombilla, aderesos = azucar, cantidad_agua = 150cm3, yerba = 100gr)
mate (mi mate, mi bombilla, sin aderesos)
mate (mi mate, mi bombilla)
*/

$stream = fopen('hist_DIA20210717.csv', 'r');
/*
$array = fgetcsv($stream); // Toda la lógica se centra en esta función
var_dump($array);
echo "<hr />";

$array = fgetcsv($stream); // Toda la lógica se centra en esta función
var_dump($array);
echo "<hr />";

$array = fgetcsv($stream); // Toda la lógica se centra en esta función
var_dump($array);
echo "<hr />";

$array = fgetcsv($stream); // Toda la lógica se centra en esta función
var_dump($array);
echo "<hr />";
*/
/**
 * Si quiero que retorne TODAS las filas, cual estructura sería IMPRESCINDIBLE usar
 * a) Una función:
 * b) Un condicional: 
 * c) Un bucle: 4
 */

/* 
string(10) "2005-01-06" string(9) "106.13000" string(6) "106.66" string(6) "105.83" string(9) "106.04000" string(7) "8568900" string(1) "0"
*/
/*
$array = fgetcsv($stream); // si retornara un arrray CON TODAS LAS FILAS
for ($i = 0; $i < count($array); $i++) {
  var_dump($array[$i]);
} 
*/

$actual = fgetcsv($stream); // lee el inicial
while ($actual != false){ 
  var_dump($actual);
  echo "<hr/>";
  $actual = fgetcsv($stream); // lee el siguiente
}; 
/*
do {
  var_dump($actual);
  echo "<hr/>";
  $actual = fgetcsv($stream); // lee el siguiente
} while($actual != false);
*/