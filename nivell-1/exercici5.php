<?php

function verificarGrado ($nota){

    if ($nota >= 60){
        echo "El teu grau es Primera Divisió";
    } else if ( $nota >= 45 && $nota <= 59 ){
        echo "El teu grau es Segona Divisio";
    } else if ( $nota >= 33 && $nota <= 44){
        echo "El teu grau es Tercera Divisio";
    } else {
        echo "Has suspes :(";
    }
}

$nota = readline("Introdueix la nota de l'estudiant: ");

verificarGrado($nota);

?>