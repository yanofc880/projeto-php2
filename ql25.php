
<?php
$tmpd1 = readline ("qual foi a temperatura na segunda?");
$tmpd2 = readline ("qual foi a temperatura na terça?");
$tmpd3 = readline ("qual foi a temperatura na quarta?");
$tmpd4 = readline ("qual foi a temperatura na quinta?");
$tmpd5 = readline ("qual foi a temperatura na sexta?");
$cont = ($tmpd1 + $tmpd2 + $tmpd3 + $tmpd4 + $tmpd5)/5;

for ($i = 1; $i <= 5; $i++){
    echo "$i -";

if ($i == 1)
    echo " a temperatura na segunda foi de: $tmpd1 graus\n";

if ($i == 2)
    echo " a temperatura na terça foi de: $tmpd2 graus\n";

if ($i == 3)
    echo " a temperatura na quarta foi de: $tmpd3 graus\n";

if ($i == 4)
    echo " a temperatura na quinta foi de: $tmpd4 graus\n";

if ($i == 5)
    echo " a temperatura na sexta foi de: $tmpd5 graus\n";
}

echo "a média das temperaturas durante os 5 dias foi de $cont graus";
?>
