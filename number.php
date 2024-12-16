<?php


/* Números entre 1 e 100
Crie um script que exiba todos os números de 1 a 100.
Para os números divisíveis por 3, exiba "Fizz".
Para os números divisíveis por 5, exiba "Buzz".
Para os números divisíveis por 3 e 5, exiba "FizzBuzz". */

$i = 0;

for ($i=0; $i < 100; $i ++)
{
    if($i % 3 === 0){
        echo 'fizz<br>';
    }elseif($i % 5 === 0){
        echo 'Buzz<br>';
    }elseif($i % 3 === 0 && $i % 5 === 0)
    {
        echo 'FizzBuzz';
    }

}