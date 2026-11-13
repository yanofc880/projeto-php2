<?php
$numerot = readline ("de qual tabuada voce quer saber?");
$verif = 1;

while ($verif <= 10 ) {
    echo "$numerot X $verif = ". $numerot * $verif . "\n";
    $verif ++;
    }
?>