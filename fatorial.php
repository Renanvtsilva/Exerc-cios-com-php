<?php

function CalcularFator($numero){
    $fatorial = 1;

    for($i=1; $i <= $numero; $i++){
        $fatorial *= $i;
    }

    return $fatorial;
}

$numero = 5;
$resultado = CalcularFator($numero);

echo "O fatorial de $numero é $resultado.";