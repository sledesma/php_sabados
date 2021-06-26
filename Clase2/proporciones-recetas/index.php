<?php
// Estructuras de datos
include "php/db.php";

$recetaElegida = "Torta de calabaza";
$ingredientes = [];

$recetaActual = 0;

// Algoritmo
// Tenemos la receta elegida (string) y las recetas (array)
while($recetaActual < count($recetas)) {
  if($recetas[$recetaActual]["Nombre"] == $recetaElegida) {
    $ingredientes = $recetas[$recetaActual]["Ingredientes"];
  }
  $recetaActual++;
}

// Tenemos los ingredientes (array)

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Recetario || v1</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!--
    Calcular las proporciones de una receta previamente definida
  -->
  <form action="resultados.php" method="post">
  
    <div class="left">
      <!-- Controles para introducir las cantidades -->
      <?php
        $ingredienteActual = 0;
        while($ingredienteActual < count($ingredientes)) {
      ?>
          <div>
            <?php echo $ingredientes[$ingredienteActual] ?>
            <input type="number" name="<?php echo $ingredientes[$ingredienteActual] ?>" />
          </div>
      <?php
          $ingredienteActual++;
        }
      ?>
    </div>

    <div class="right">
      <!-- Introducir la cantidad nueva de harina y el boton Calcular Proporcion -->
      <div>
        <span>Convertir por </span>
        <select name="CampoConversion">
        <?php
          $optActual = 0;
          while($optActual < count($ingredientes)) {
        ?>
            <option value="<?php echo $ingredientes[$optActual] ?>">
              <?php echo $ingredientes[$optActual] ?>
            </option>
        <?php
            $optActual++;
          }
        ?>
        </select>
        <input type="number" name="nNuevaHarina" id="">
      </div>
      <div>
        <button>Calcular Propocional</button>
      </div>
    </div>

  </form>
</body>
</html>