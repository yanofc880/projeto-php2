<?php
$numero = readline("qual o numero?");
$mult = 1;

for ($i = 1; $i <= $numero; $i++) {
    $mult = $mult * $i;
    echo $i;

    if ($i < $numero)
        echo " X ";
}

echo " = $mult";
echo "\nentao o fatorial do numero $numero, é $mult";
?>
