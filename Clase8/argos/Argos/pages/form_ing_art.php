<?php
    $lista_art=[];
    require'../conect/articulos_op.php';
    if (isset($_GET['mostrar'])){
        $lista_art= show_art($conexion);
    };

    var_dump($lista_art);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ingreso de articulos</title>
</head>
<body>
    <a href="../index.php">regresar</a>
    <hr>

    <h2>ingreso de articulos:</h2>
    <h4>a continuacion ingrese los datos solicitados:</h4>
    <form action="" method="POST">
        <label for="nombreArt">nombre del articulo:</label>
        <input type="text" name="nombreArt" id="">
        <br>
        
        <label for="descipcionArt">un detalle del articulo</label>
        <input type="text" name="descipcionArt" id="">
        <br>
        
        <label for="invArt">cantidad:</label>
        <input type="text" name="invArt" id="">
        <br>
        
        <label for="valorArt">el precio:</label>
        <input type="text" name="valorArt" id="">
        <br>
        
        <input type="submit" value="ingresar">
    </form>
    <a href="?mostrar=1">actualizar lista</a>
    
    <?php 
        if(isset($_POST['nombreArt'])){
            ingreso_articulo($conexion);};
        
        if (isset($_GET['mostrar'])&& $_GET['mostrar']==1){
            var_dump($lista_art);} ?>

    <table>
        <tr>
            <th>nombre</th>
            <th>inventario</th>
            <th>cantidad</th>
        </tr>
        
    </table>    
    <?php     ?>
</body>
</html>