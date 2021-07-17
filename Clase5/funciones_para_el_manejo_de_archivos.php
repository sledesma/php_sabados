<?php

/**
 * fopen():
 * 
 * Sirve para: ABRIR UN ARCHIVO - ES NECESARIA PARA LEERLO O ESCRIBIRLO
 * Parametros: 
 *  $ruta (string) - Es la ruta del archivo
 *  $modo (string) - ¿Para que lo voy a abrir? => CONDICIONES INICIALES
 * Retorno:
 *  manejador del archivo (resource) - se pasa al resto de las funciones
 */
$manejador = fopen($ruta, $modo);

/**
 * fgetcsv()
 * 
 * Sirve para: Leer la SIGUIENTE fila de un archivo .csv
 * Parametros:
 *  $manejador (resource) - Lo devuelto por fopen
 * Retorno:
 *  array si hay filas por leer o FALSE si no quedan más filas. Retorna NULL en caso de error
 */
$fila = fgetcsv($manejador);

/**
 * fputcsv()
 * 
 * Sirve para: Escribir una línea al final de un archivo .csv
 * Parametros:
 *  $manejador (resource) - Lo devuelto por fopen
 *  $campos (array) - Un array NO ASOCIATIVO con los campos a incluir
 * Retorno:
 *  Número en caso de éxito o FALSE en caso de error
 */
fputcsv($manejador, $campos);

/**
 * fread()
 * 
 * Sirve para: Leer el contenido de un archivo de texto
 * Parametros:
 *  $manejador (resource) - Lo devuelto por fopen
 *  $cantidadBytes (int) - Los bytes a leer (1 caracter = 1 byte)
 * Retorno:
 *  string con los bytes leídos
 */
$texto = fread($manejador, $cantidadBytes);

/**
 * fwrite()
 * 
 * Sirve para: escribir en un archivo de texto
 * Parametros:
 *  $manejador (resource) - Lo devuelto por fopen
 *  $contenido (string) - Lo que quiero añadir al archivo
 * Retorno:
 *  Número en caso de éxito o FALSE en caso de error.
 */
fwrite($manejador, $contenido);

/**
 * fclose()
 * 
 * Sirve para: CERRAR UN ARCHIVO - LIBERA LA MEMORIA - IMPORTANTE PARA EL RENDIMIENTO
 * Paramentros:
 *  $manejador (resource) - El resultado de fopen()
 * Retorno:
 *  Nada
 */
fclose($manejador);

