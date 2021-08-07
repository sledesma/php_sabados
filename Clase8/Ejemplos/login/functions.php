<?php

function user_exists($conexion, $username, $password) {
  $sql = "select COUNT(*) AS Cantidad from users where username='$username' and psw = '$password'";
  $result = mysqli_query($conexion, $sql);
  $datos = mysqli_fetch_assoc($result);
  $cantidad = $datos['Cantidad'];
  return $cantidad > 0;
}

function login_user($username) {
  $_SESSION['user'] = $username;
}

function is_logged() {
  return isset($_SESSION['user']);
}

function logout() {
  session_unset();
  session_destroy();
}