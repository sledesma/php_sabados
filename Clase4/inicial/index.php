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
