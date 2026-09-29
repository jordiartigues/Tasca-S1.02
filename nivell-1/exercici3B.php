<?php

function operar(int $numero1, int $numero2, string $operacion)
{
    if ($operacion == "suma") {
        return $numero1 + $numero2;

    } else if ($operacion == "resta") {
        return $numero1 - $numero2;

    } else if ($operacion == "multiplicacion") {
        return $numero1 * $numero2;

    } else if ($operacion == "division") {

        if ($numero2 == 0) {
            return "No se puede dividir entre 0";
        } else {
            return $numero1 / $numero2;
        }

    } else {
        return "Operacion no valida";
    }
}


/* Probamos la funncion */

echo operar(20, 5, "resta");

?>