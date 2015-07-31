<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 30/07/15
 * Time: 17:51
 * Crie uma pasta “p2_exercicio1” e um arquivo index.php.
 * Dentro dele crie um array com números variados de 1 a 100,
 * o programa deverá mostrar se o número é ímpar ou par.
 */
function calcula($a){
    return  ($a % 2) === 0 ? true : false;
}

$limite= 100;
$i = 1;
$j = 0;
$array = array();

while($limite >= $i and $j < $limite){
    $array[$j] = $i;
    $i++;
    $j++;
}

//var_dump($array);
//print_r($array);

for($i = 0; $i < count($array); $i++){

    $valor = calcula($array[$i]);
    if($valor == true){
        echo " O número ".$array[$i]." é par.".'<br />';
    }
    else {
        echo " O número ".$array[$i]." é ímpar.".'<br />';
    }
}
?>