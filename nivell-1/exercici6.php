<?php

function isBitten(){

    $numero = rand (0, 1);

    if ($numero == 1){
        return TRUE;
    } else {
        return FALSE;
    }
}

/* para que muestre en pantalla que tipo de dato es y que contiene usamos var dump*/


    var_dump(isBitten());


?>