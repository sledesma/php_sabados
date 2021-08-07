<?php

/**
 * Calculadora que reciba los números por GET
**/

function calc($n1, $n2) {
  return [
    'suma' => $n1 + $n2,
    'resta' => $n1 - $n2,
    'multiplicacion' => $n1 * $n2,
    'division' => $n1 / $n2
  ];
}
if(isset($_GET['n1']) && isset($_GET['n2'])) {
  $resultados = calc(
    $_GET['n1'],
    $_GET['n2']
  );

  header('Content-type: application/json');
  echo json_encode($resultados);
}