
<?php
$pequenos = 0;
$medios = 0;
$grandes = 0;
$peso = [];

for ($i = 1; $i <= 10; $i++) {
    $peso[$i] = readline("Qual o peso médio de uma fruta do lote $i em gramas? ");
}

for ($i = 1; $i <= 10; $i++) {
    echo "O lote $i tem ";

    if ($peso[$i] < 100) {
        echo "$peso[$i] gramas, é um lote pequeno\n";
        $pequenos++;

    } elseif ($peso[$i] <= 200) {
        echo "$peso[$i] gramas, é um lote médio\n";
        $medios++;

    } else {
        echo "$peso[$i] gramas, é um lote grande\n";
        $grandes++;
    }
}

echo "\n$pequenos lotes são pequenos.";
echo "\n$medios lotes são médios.";
echo "\n$grandes lotes são grandes.\n";

?>
