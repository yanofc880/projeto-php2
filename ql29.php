
<?php

$compra = [];

for ($i = 1; $i <= 8; $i++) {
    $compra[$i] = readline("Qual o valor da compra do pedido $i? R$ ");
}

for ($i = 1; $i <= 8; $i++) {
echo "O pedido $i tem ";

    if ($compra[$i] >= 300) {
        echo "frete grátis\n";

    } elseif ($compra[$i] >= 150) {
        echo "frete de R$ 15,00\n";

    } else {
        echo "frete de R$ 25,00\n";
    }
}

?>
