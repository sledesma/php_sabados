<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login || Iniciar sesion</title>
</head>
<body>
  <form action="index.php" method="post">
    <input type="hidden" name="action" value="login">

    <div>
      <label for="txtUsername">Usuario</label>
      <input type="text" name="username" id="txtUsername">
    </div>

    <div>
      <label for="txtPass">Contraseña</label>
      <input type="password" name="pass" id="txtPass">
    </div>

    <button>Iniciar sesion</button>
  </form>
</body>
</html>