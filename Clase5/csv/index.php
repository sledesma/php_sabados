<?php

require_once "csv.php";

$datos = csv_read_all('hist_DIA20210717.csv');
var_dump(json_encode($datos));