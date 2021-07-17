<?php

require_once "csv.php";

$src = csv_read_all('hist_DIA20210717.csv');

$sumCierre = array_reduce($src, function($final, $itemActual){
  $final += $itemActual['maximo'];
  return $final;
}, 0);
$cantCierre = count($src);
$promCierre = $sumCierre / $cantCierre;

$maxMax = array_reduce($src, function($maximo, $itemActual){
  if($itemActual['maximo'] > $maximo) {
    return $itemActual['maximo'];
  } else {
    return $maximo;
  }
}, 0);

$minMin = array_reduce($src, function($minimo, $itemActual){
  if($itemActual['minimo'] < $minimo) {
    return $itemActual['minimo'];
  } else {
    return $minimo;
  }
}, $src[0]['minimo']);

echo "Cierre promedio: ".$promCierre. "<br />";
echo "El precio estuvo entre $minMin y $maxMax <br />";

