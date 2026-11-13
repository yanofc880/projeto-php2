<?php
$soma1 = 2;
$soma2 = 1;
for ($i = 1; $i <= 50; $i++){
    echo "$i -";
   
if ($i%2 == 0){
    echo " esse numero é par\n";
   $soma1 = $soma1 + $i;

} else {
    echo  " esse numero é impar\n";
    $soma2 = $soma2 + $i;
}
}
echo "a soma de todos os numeros pares de 1 a 50 é de $soma1\n";
echo "a soma de todos os numeros impares de 1 a 50 é de $soma2\n";
?>