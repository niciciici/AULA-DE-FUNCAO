<?php 
// Definição da função

function soma ($n1,$n2){
    $res = $n1 + $n2;
    echo "\nSoma: $res";
}
//chamada da função/invocação

soma(2,2);


function sub($num1, $num2){
    $res = $num1 - $num2;
    return $res;
}

function calcular($n1, $n2){
    echo "...O Resultado da soma é:";
    soma($n1, $n2);
    $ressub = sub($n1, $n2);
    echo "\n Subtração: $ressub ";
}
soma(1,1);
soma(5,20);
$retornofuncao = sub(5,2);

echo "\n Retorno: $retornofuncao";

