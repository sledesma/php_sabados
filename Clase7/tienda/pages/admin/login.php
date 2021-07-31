<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Iniciar sesion</h2>
  <form action="index.php" method="GET">

    <input type="hidden" name="action" value="admin_login">

    <div>
      Usuario:
      <input type="text" name="txtUsuario">
    </div>

    <div>
      Contraseña:
      <input type="text" name="txtClave">
    </div>

    <button>Iniciar sesion</button>

  </form>
</body>
</html>