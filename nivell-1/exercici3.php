<?php

$enteroX = 10;
$enteroY = 25;

$decimalN = 56.7;
$decimalM = 12.4;


/* mostrar valores */
echo $enteroX;
echo "<br>";

echo $enteroY;
echo "<br>";

echo $decimalM;
echo "<br>";

echo $decimalN;
echo "<br>";


/* operaciones X y Y */

$suma = $enteroX + $enteroY;
echo "La suma es: " . $suma;
echo "<br>";

$resta = $enteroX - $enteroY;
echo "La resta es: " . $resta;
echo "<br>";

$multiplicacion = $enteroX * $enteroY;
echo $multiplicacion;
echo "<br>";

$modulo = $enteroX % $enteroY;
echo $modulo;
echo "<br>";


/* operaciones N y M */

$suma1 = $decimalM + $decimalN;
echo $suma1;
echo "<br>";

$resta1 = $decimalM - $decimalN;
echo $resta1;
echo "<br>";

$multiplicacion1 = $decimalM * $decimalN;
echo $multiplicacion1;
echo "<br>";


/* % trabaja con enteros, necesitamos la funcion fmod */

$modulo1 = fmod($decimalM, $decimalN);
echo $modulo1;
echo "<br>";


/* doble de cada variable */

$dobleX = $enteroX * 2;
echo $dobleX;
echo "<br>";

$dobleY = $enteroY * 2;
echo $dobleY;
echo "<br>";

$dobleN = $decimalN * 2;
echo $dobleN;
echo "<br>";

$dobleM = $decimalM * 2;
echo $dobleM;
echo "<br>";


/* suma de todas las variables */

$sumaTotal = $enteroX + $enteroY + $decimalM + $decimalN;
echo "La suma de todos los numeros es " . $sumaTotal;
echo "<br>";


/* producto de todas las variables */

$productoTotal = $enteroX * $enteroY * $decimalM * $decimalN;
echo "El producto de todos los numeros es " . $productoTotal;

?>