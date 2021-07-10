<?php
/**
 * El principal aporte de este archivo
 * es ofrecer un UNICO punto de acceso.
 * Todas las peticiones HTTP serán dirigidas a este archivo
**/

// Determinar la petición actual
$accion = $_GET['a'];

// Enviar la respuesta correspondiente a dicha petición

require_once $accion.".php";

/*

PHP cuenta con 4 funciones para incluir código
incluir código = añadir código al código que se está ejecutando ANTES de que éste se ejecute
Imprescindible = PHP Debe DETENERSE si no encuentra el archivo

1.require_once
¿Es imprescindible?         =>  SI
¿Se necesita una sola vez?  =>  SI

2.require
¿Es imprescindible?         =>  SI
¿Se necesita una sola vez?  =>  NO

3.include_once
¿Es imprescindible?         =>  NO
¿Se necesita una sola vez?  =>  SI

4.include
¿Es imprescindible?         =>  NO
¿Se necesita una sola vez?  =>  NO


*/


/*
switch($accion) {
  case 'home':
    include "home.php";
    break;
  case 'ingreso':
    include "ingreso.php";
    break;
  case 'producto':
    include "producto.php";
    break;
  case 'productos':
    include "productos.php";
    break;
  case 'registro':
    include "registro.php";
    break;
  default:
    include "home.php";
    break;
}
*/

