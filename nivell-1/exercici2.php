<?php

$saludo = "Hello world!";


/* texto a mayusculas */
$resultado = strtoupper($saludo);
echo $resultado;

echo "<br>";

/*longitud del texto */

echo strlen ($saludo);

echo "<br>";

/* imprimir con orden inverso caracteres */

echo strrev ($saludo);

echo "<br>";



$presentacion = "Aquest és el curs de PHP";
echo $saludo . " " . $presentacion;

?>