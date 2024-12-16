<?php

function fibonacci($quantidade){
    $sequencia = [0, 1];

    for($i = 2; $i < $quantidade; $i++){

        $sequencia[] = $sequencia[$i - 1] + $sequencia [$i - 2];
    }

    return $sequencia;
}

$quantidade = 20;
$resultado = fibonacci($quantidade);

echo "Sequencia de Fibonacci com $quantidade numeros: ";
echo implode(", ", $resultado);