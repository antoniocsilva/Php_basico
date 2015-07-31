<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 30/07/15
 * Time: 21:30
 * Crie uma pasta “p2_exercicio7” e um arquivo index.php. Dentro dele crie um programa para mostrar a sequência fibonacci até o 100º elemento,
 * para isso, crie uma função fibonacci que deverá receber o índice do elemento e a função irá calcular o número correspondente daquele índice.
 */
function fibo($n){
    return ($n < 2) ? $n : fibo($n - 1) + fibo($n - 2);
}
$indice = 20;

for($i = 0; $i < $indice; $i++){
    print fibo($i)."    ";
}