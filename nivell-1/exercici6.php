<?php

function isBitten(): bool {

    $numero = rand (0, 1);

    if ($numero == 1){
        return TRUE;
    } else {
        return FALSE;
    }
}

/* para que muestre en pantalla que tipo de dato es y que contiene usamos var dump*/


    if (isBitten()){
        echo "Charlie te muerde el dedo";
        } else {
            echo "Esta vez no te ha mordido, prueba otra";
        }


?>