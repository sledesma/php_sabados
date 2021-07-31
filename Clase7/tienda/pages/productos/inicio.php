<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <a href="index.php?action=ver_carrito">Ver carrito</a>
  <?php foreach ($productos as $producto) { ?>
    <div>
      <span><?php echo $producto['descripcion'] ?></span>
      <a href="index.php?action=agregar_carrito&id=<?php echo $producto['id'] ?>">Agregar al carrito</a>
    </div>
  <?php } ?>
</body>
</html>