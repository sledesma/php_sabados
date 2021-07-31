<?php

function data_usuarios_existe($conn, $user, $pass) {
  $sql = 'SELECT COUNT(*) AS Coincidencias FROM usuarios WHERE username="'.$user.'" AND pass = "'.$pass.'"';
  $result = mysqli_query($conn, $sql);
  $data = mysqli_fetch_assoc($result);
  $coincidencias = $data['Coincidencias'];
/*
  if($coincidencias > 0) {
    return true;
  } else {
    return false;
  }
*/

  return $coincidencias > 0;

}