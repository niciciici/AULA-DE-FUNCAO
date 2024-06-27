<?php 


function calcularimc($peso, $altura){
    $imc = $peso/(pow($altura,2));
    return $imc;
    
    
}

function situacao($imc){
    if($imc < 16){
        echo "O imc é: {$imc}. Situação: Baixo peso";
    }else if($imc >= 16 && $imc <= 25){
        echo "O imc é: {$imc}. Situação: Saudável";
    }else{
        echo "O imc é: {$imc}. Situação: sobrepeso";
    }
    
}  
$peso = $_GET["peso"];
$altura = $_GET["alt"];

//$peso1 = (double)$peso;
//$altura1 = (double)$altura;
//var_dump($peso);
//var_dump($altura);


$imc = calcularimc($peso,$altura);
situacao($imc);

