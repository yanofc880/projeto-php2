
<?php

$valor = readline("Qual o valor que deseja sacar? R$ ");
$notas10 = 0;
$notas2 = 0;

if ($valor % 2 != 0 or $valor <= 0) {
    echo "O saque não pode ser realizado com o valor exato.\n";

} else {
    for ($i = 10; $i <= $valor; $i += 10) {
        $notas10++;
    }

    $resto = $valor - ($notas10 * 10);
    $notas2 = $resto / 2;

    echo "Quantidade de notas de R$ 10,00: $notas10\n";
    echo "Quantidade de notas de R$ 2,00: $notas2\n";
}

?>
