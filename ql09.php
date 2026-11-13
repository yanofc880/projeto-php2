<?php
echo "ola seja bem vindo a somadora automatica informe seus numeros, se seu numero for 0, a soma de todos os numeros para, aproveite!\n";

$numero1 = readline("qual seu 1 numero?");
$numero2 = readline("qual seu 2 numero?");
$soma1 = $numero1 + $numero2;
$soma2 = $soma1 + $opcao;
$opcao = -1;

while ($opcao != 0){
    echo "\n$numero1 + $numero2 = $soma1\n";
    $opcao = readline("qual seu proximo numero?");
    echo "\n$soma1 + $opcao = $soma2\n";
     }
echo "calculadora de soma infinita encerrada";
?>