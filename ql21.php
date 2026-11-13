
<?php
$csa1 = readline ("quantos litros de agua voce usou segunda?");
$csa2 = readline ("quantos litros de agua voce usou terça?");
$csa3 = readline ("quantos litros de agua voce usou quarta?");
$csa4 = readline ("quantos litros de agua voce usou quinta?");
$csa5 = readline ("quantos litros de agua voce usou sexta?");
$csa6 = readline ("quantos litros de agua voce usou sabado?");
$csa7 = readline ("quantos litros de agua voce usou domingo?");
$cont = $csa1 + $csa2 + $csa3 + $csa4 + $csa5 + $csa6 +$csa7;
$mult = 1;

for ($i = 1; $i <= 7; $i++){
    echo "$i -";

if ($i == 1) 
    echo " o seu consumo de agua na segunda foi de: $csa1 litros\n";

if ($i == 2) 
    echo " o seu consumo de agua na terça foi de: $csa2 litros\n";

if ($i == 3) 
    echo " o seu consumo de agua na quarta foi de: $csa3 litros\n";

if ($i == 4) 
    echo " o seu consumo de agua na quinta foi de: $csa4 litros\n";

if ($i == 5) 
    echo " o seu consumo de agua na sexta foi de: $csa5 litros\n";

if ($i == 6) 
    echo " o seu consumo de agua na sabado foi de: $csa6 litros\n";

if ($i == 7) 
    echo " o seu consumo de agua na domingo foi de: $csa7 litros\n";
}

echo "o seu consumo de agua na semana foi de $cont litros"
?>
