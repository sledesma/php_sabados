<?php

// 1. Crear o retomar la sesión
session_start();
// El identificador de sesión se obtiene con session_id();
session_id();

// 2. Leer y escribir variables de sesión
$_SESSION['variable']; // Lectura
$_SESSION['variable']; // Escritura

// 3. Cerrar la sesión
session_unset(); // Borrar las variabes de sesión
session_destroy(); // Borrar la sesión misma
