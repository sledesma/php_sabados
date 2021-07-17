<?php

/***********************************
 * 1) Crear un archivo .log / Trace
***********************************/

function dividir($n1, $n2) {
  return $n1 / $n2;
}

dividir(10, 0);

/**
 * Trace:
 * 
 * Error: Division by Zero
 * at dividir(10, 0) on index.php:11
 * at dividir on index.php:7
 * at return $n1/$n2 on index.php:8
 */

 /* HERRAMIENTA DE DEPURACION (DEBUG = ENCONTRAR Y QUITAR ERRORES)
 Fatal error: 
  Uncaught DivisionByZeroError: 
    Division by zero in /home/sebas/INBOX/.xampp/php_sabados/Clase5/archivos/index.php:8 
    
    Stack trace: 
    #0 /home/sebas/INBOX/.xampp/php_sabados/Clase5/archivos/index.php(11): dividir(10, 0) 
    #1 {main} thrown in /home/sebas/INBOX/.xampp/php_sabados/Clase5/archivos/index.php on line 8
 */

/**************************************
 * Comunicar PHP con Hojas de cálculo
***************************************/

?>
