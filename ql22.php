
<?php
$pdv1 = readline ("quantos produtos voce vendeu na segunda?");
$pdv2 = readline ("quantos produtos voce vendeu na terça?");
$pdv3 = readline ("quantos produtos voce vendeu na quarta?");
$pdv4 = readline ("quantos produtos voce vendeu na quinta?");
$pdv5 = readline ("quantos produtos voce vendeu na sexta?");
$cont = $pdv1 + $pdv2 + $pdv3 + $pdv4 + $pdv5;

for ($i = 1; $i <= 5; $i++){
    echo "$i -";

if ($i == 1) 
    echo " a quantidade de produtos vendidos na segunda foi de: $pdv1 produtos vendidos\n";

if ($i == 2) 
    echo "  a quantidade de produtos vendidos na terça foi de: $pdv2 produtos vendidos\n";

if ($i == 3) 
    echo "  a quantidade de produtos vendidos na quarta foi de: $pdv3 produtos vendidos\n";

if ($i == 4) 
    echo " a quantidade de produtos vendidos na quinta foi de: $pdv4 produtos vendidos\n";

if ($i == 5) 
    echo "  a quantidade de produtos vendidos na sexta foi de: $pdv5 produtos vendidos\n";
}

echo "a quantidade de produtos vendidos durante os 5 dias de trabalho foi de $cont"
?>
