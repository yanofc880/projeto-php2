<?php

$udia = readline("Quantas ia voce usou? ");

for ($i = 1; $i <= $udia; $i++) {
    $tdia = readline("Quantos testes voce fez na ia $i? ");
    $qdtc = readline("Quantos testes deram certo na ia $i? ");
    $cal = $tdia - $qdtc;
    $pont = ($qdtc / $tdia) * 100;

    echo "\nia $i\n";
    echo "Testes que deram certo: $qdtc\n";
    echo "Testes que deram errado: $cal\n";
    echo "Pontuacao: $pont\n";

if ($pont < 50) {
        echo "Desempenho baixo\n";

} elseif ($pont < 80) {
        echo "Desempenho moderado\n";

} else {
        echo "Desempenho alto\n";
}
}

?>
