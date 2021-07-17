<?php

function log_write($titulo, $msj) {

  $archivo = fopen(date("d_m_Y").".log", "a+");

  // Leer datos en forma de texto: fread()

  // Escribir datos en forma de texto: fwrite()
  $micro = microtime(true);
  $txt = "$micro - [$titulo] : $msj | \n";
  fwrite($archivo, $txt);

  fclose($archivo);

}

function log_read_current() {
  $archivo = fopen(date("d_m_Y").".log", "r"); 
  $contenido = fread($archivo, filesize(date("d_m_Y").".log"));

  $contenido = explode("|", $contenido);
  $out = [];

  for ($i=0; $i < count($contenido); $i++) { 
    $aux = explode("-", $contenido[$i]);
    $out[$aux[0]] = $aux[1];
  }

  return $out;
  fclose($archivo);
}

var_dump(log_read_current());

/*

array(3) { 
  ["1626538979.4673 "]=> string(37) " [Formulario] : Validando formulario " 
  [" 1626538981.6391 "]=> string(37) " [Formulario] : Validando formulario " 
  [" 1626538982.2843 "]=> string(37) " [Formulario] : Validando formulario " 
}

*/