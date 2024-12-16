<?php

function inverterString($str){
    return strrev($str);
}

$texto = 'Testando Logica';
$resultado = inverterString($texto);

echo 'Texto Original ' . $texto . '<br>';
echo 'Texto Invertido ' . $resultado;
