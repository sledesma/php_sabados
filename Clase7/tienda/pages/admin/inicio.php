<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Administrador</h2>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($productos as $producto) { ?>
        <tr>
          <td><?php echo $producto['id'] ?></td>
          <td><?php echo $producto['descripcion'] ?></td>
          <td><?php echo $producto['precio'] ?></td>
          <td>
            <a href="#">Editar</a>
            <a href="#">Borrar</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>

  </table>
</body>
</html>