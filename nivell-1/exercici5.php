<?php

function verificarGrado (float $nota): string {

    if ($nota >= 60){
        return "El teu grau es Primera Divisió";
    } else if ( $nota >= 45){
        return "El teu grau es Segona Divisio";
    } else if ( $nota >= 33){
        return "El teu grau es Tercera Divisio";
    } else {
        return "Has suspes :(";
    }
}

$nota = readline("Introdueix la nota de l'estudiant: ");

echo verificarGrado($nota);

?>