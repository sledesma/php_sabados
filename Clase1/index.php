<?php 
$variable = "<h1>Hola mundo!!</h1>";
$a = 15;
$b = 20;

//print($a / $b);
echo ($a + $b . '<br>');
echo($a - $b) . '<br>';
echo($a * $b). '<br>';
echo($b / $a). '<br>';
echo($b % $a). '<br>';

/*
    $cadena1 = "Hola ";
    $cadena2 = " mundo!";
    $salida = $cadena1 + $cadena2; NO se concatena asi en PHP
*/

$cadena1 = "Hola ";
$cadena2 = " mundo concatenado";
//$salida = '<p>' . $cadena1 . $cadena2 . '</p>';

echo '<p>' . $cadena1 . $cadena2 . '</p>';


/*
Operadores Lógicos
AND
OR
NOT

AND
V   V   = V
F   V   = F
V   F   = F
F   F   = F


OR
V   V   = V
F   V   = V
V   F   = V
F   F   = F

NOT
!V = F
!F = V
*/

/*
    Hoy llueve y hace frío
*/
$cond1 = "Hoy hay sol";
$cond2 = "Hace calor";

echo "-----------------------------";
echo ($cond1 == "Hoy llueve" || $cond2 == "Hace frio");
echo "----------------------------- <br>";


$booleano = true;
echo "-----------------------------";
echo (!$booleano);
echo "-----------------------------<br>";


$num1 = 12;
$num2 = "12";

echo "Comparación de números <br>";
echo ($num1 === $num2) . '<br>';




if($num1 == $num2){
    echo "Los números son iguales <br>";
}else{
    echo "Los números son diferentes <br>";
}

if($num1 === $num2){
    echo "Los números son iguales <br>";
}else{
    echo "Los números son diferentes <br>";
}


// Dados dos números imprimir el mayor y despues el menor
$num1 = 535;
$num2 = 2000;

if($num1 > $num2){
    echo "<p>El número " . $num1 . " es el mayor y el número " . $num2 . " es el menor</p>";
}else{
    echo "<p>El número " . $num2 . " es el mayor y el número " . $num1 . " es el menor</p>";
}


// Dados tres números, imprimir el mayor, el menor y el del medio
$num1 = 123;
$num2 = 978;
$num3 = 555;


if($num1 > $num2 && $num1 > $num3){
    $mayor = $num1;
    if($num2 > $num3){
        $medio = $num2;
        $menor = $num3;
    }else{
        $medio = $num3;
        $menor = $num2;
    }
}elseif($num2 > $num3){
    $mayor = $num2;
    if($num1 > $num3){
        $medio = $num1;
        $menor = $num3;
    }else{
        $medio = $num3;
        $menor = $num1;
    }
}else{
    $mayor = $num3;
    if($num1 > $num2){
        $medio = $num1;
        $menor = $num2;
    }else{
        $medio = $num2;
        $menor = $num1;
    }
}

echo "<h2>Resultado del if anidado</h2>";
echo "<p>El número mayor es " . $mayor . ", el del medio es " . $medio . " y el menor es " . $menor .'</p>';

//$variable = 123456;

/*
    JAVA
    int n1 = 123;
    n1 = 5;
    n1 = 12.3; NO
    n1 = "Hola"; NO 

    PHP
    $n1 = 123; => Ah para, si $n1 tiene almacenado 123 entonces es un entero
    $n1 = "Hola"; => si $n1 tiene guardado "Hola", entonces es un string 

*/


/*
    PHP es un lenguaje de tipado dinámico
    Java => es un lenguje fuertemente tipado
    String variable = "Hola mundo!!";
    variable = 123; => NO
*/

// Esto es un comentario de una línea


/*

 Aca adentro, va a ser un comentario
 Esta es otra linea dentro del comentario
*/

/*

Lenguajes compilados y lenguajes interpretados

*/



//print($variable);