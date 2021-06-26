<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <form action="php/procesarFormulario.php" method="get">
    <h2>Login</h2>
    <div>
      <label for="txtUsuario">Usuario: </label>
      <input type="text" name="txtUsuario" id="txtUsuario">
    </div>
    <div>
      <label for="txtClave">Contraseña: </label>
      <input type="password" name="txtClave" id="txtClave">
    </div>
    <button>Enviar</button>
  </form>

  <?php
  if(isset($_GET['err']) && $_GET['err'] == '1') {
    echo "Datos incorrectos";
  }
  ?>
</body>
</html>