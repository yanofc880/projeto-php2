<?php

echo "ola seja bem vindo ao descubra o numero, tente adivinhar\n";

$pergunta =  readline("qual o numero?");
$opcao = 4;

while ($pergunta != 4){
    echo "numero errado, tente adivinhar de novo\n";
    $pergunta =  readline("qual o seu novo palpite?");
}
echo "voce acertou o numero secreto parabens";
?>