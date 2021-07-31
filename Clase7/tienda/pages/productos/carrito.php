<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <a href="index.php">Atras</a> | <a href="index.php?action=cerrar_sesion">Vaciar carrito</a>

  <?php if( count($items) == 0 ) { ?>

    <h3>Tu carrito está vacío</h3>

  <?php } else { ?>

    <h2>Tu carrito</h2>

    <?php var_dump($items) ?>

  <?php } ?>

</body>
</html>