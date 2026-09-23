<?php

function contar ($final = 10, $salto = 1 ){
    for ($i = 1; $i <= $final; $i += $salto){
        echo $i . "/n";
    }
}


$final = readline("Hasta que numero quieres contar?");
$salto = readline("De cuanto en cuanto quieres contar?");

if ($final == ""){
    $final = 10;
}

if ($salto == ""){
    $salto = 1;
}

contar ($final , $salto );


?>