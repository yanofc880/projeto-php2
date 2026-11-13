<?php
$soma = 0;

for ($i = 1; $i <= 100; $i++) {
    echo $i;

if ($i < 100) {
    echo " + ";
}
$soma = $soma + $i;
}

echo " = $soma";
?>