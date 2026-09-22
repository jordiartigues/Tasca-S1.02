<?php

$numero1 = readline("introduce el primer numero: ");
$numero2 = readline ("introduce el segundo numero: ");

/* comprobamos si ha introducido numeros */


if (!is_numeric($numero1) || !is_numeric($numero2)){
    echo "tienes que introducir numeros para que funcione";
} else{


$operacion = readline("Introduce la operacion: ");


/* para asegurarnos q los numeros son numeros, los convertimos poniendo (float) antes de readline */


if ($operacion == "suma") {
    echo $numero1 + $numero2;
} else if ($operacion == "resta"){
    echo $numero1 - $numero2;
} else if ($operacion == "multiplicacion"){
    echo $numero1 * $numero2;
} else if ($operacion == "division"){
    echo $numero1 / $numero2;
} else {
    echo "Operacion no valida";
}
}



?>