
<?php
$falta1 = readline ("quantas faltas tem o aluno 1?");
$falta2 = readline ("quantas faltas tem o aluno 2?");
$falta3 = readline ("quantas faltas tem o aluno 3?");
$falta4 = readline ("quantas faltas tem o aluno 4?");
$falta5 = readline ("quantas faltas tem o aluno 5?");
$falta6 = readline ("quantas faltas tem o aluno 6?");
$falta7 = readline ("quantas faltas tem o aluno 7?");
$falta8 = readline ("quantas faltas tem o aluno 8?");
$falta9 = readline ("quantas faltas tem o aluno 9?");
$falta10 = readline ("quantas faltas tem o aluno 10?");
$falta11 = readline ("quantas faltas tem o aluno 11?");
$falta12 = readline ("quantas faltas tem o aluno 12?");

$fnu = [0];
$fu = [0];

for ($i = 1; $i <= 12; $i++){
    echo "o aluno $i tem -";

if ($i == 1 and $falta1 <= 15) {
    echo " tem $falta1 faltas, ele nao passou o limites de faltas\n";
    $fnu[0]++;

} elseif ($i == 1 and $falta1 > 15) {
    echo " tem $falta1 faltas, ele passou o limites de faltas\n";
    $fu[0]++;
}

if ($i == 2 and $falta2 <= 15) {
    echo " tem $falta2 faltas, ele nao passou o limites de faltas\n";
    $fnu[0]++;

} elseif ($i == 2 and $falta2 > 15) {
    echo " tem $falta2 faltas, ele passou o limites de faltas\n";
    $fu[0]++;
}

if ($i == 3 and $falta3 <= 15) {
    echo " o tem $falta3 faltas, ele nao passou o limites de faltas\n";
    $fnu[0]++;

} elseif ($i == 3 and $falta3 > 15) {
    echo " tem $falta3 faltas, ele passou o limites de faltas\n";
    $fu[0]++;
}

if ($i == 4 and $falta4 <= 15){
    echo " tem $falta4 faltas, ele nao passou o limites de faltas\n";
    $fnu[0]++;

} elseif ($i == 4 and $falta4 > 15) {
    echo "tem $falta4 faltas, ele passou o limites de faltas\n";
    $fu[0]++;
}

if ($i == 5 and $falta5 <= 15) {
    echo " tem $falta5 faltas, ele nao passou o limites de faltas\n";
    $fnu[0]++;

} elseif ($i == 5 and $falta5 > 15) {
    echo " tem $falta5 faltas, ele passou o limites de faltas\n";
    $fu[0]++;
}

if ($i == 6 and $falta6 <= 15){
    echo "m $falta6 faltas, ele nao passou o limites de faltas\n";
    $fnu[0]++;

} elseif ($i == 6 and $falta6 > 15) {
    echo " tem $falta6 faltas, ele passou o limites de faltas\n";
    $fu[0]++;
}

if ($i == 7 and $falta7 <= 15){
    echo " tem $falta7 faltas, ele nao passou o limites de faltas\n";
    $fnu[0]++;

} elseif ($i == 7 and $falta7 > 15) {
    echo " tem $falta7 faltas, ele passou o limites de faltas\n";
    $fu[0]++;
}

if ($i == 8 and $falta8 <= 15){
    echo " tem $falta8 faltas, ele nao passou o limites de faltas\n";
    $fnu[0]++;

} elseif ($i == 8 and $falta8 > 15) {
    echo " tem $falta8 faltas, ele passou o limites de faltas\n";
    $fu[0]++;
}

if ($i == 9 and $falta9 <= 15){
    echo " tem $falta9 faltas, ele nao passou o limites de faltas\n";
    $fnu[0]++;

} elseif ($i == 9 and $falta9 > 15) {
    echo " tem $falta9 faltas, ele passou o limites de faltas\n";
    $fu[0]++;
}

if ($i == 10 and $falta10 <= 15){
    echo " tem $falta10 faltas, ele nao passou o limites de faltas\n";
    $fnu[0]++;

} elseif ($i == 10 and $falta10 > 15) {
    echo " tem $falta10 faltas, ele passou o limites de faltas\n";
    $fu[0]++;
}

if ($i == 11 and $falta11 <= 15){
    echo " tem $falta11 faltas, ele nao passou o limites de faltas\n";
    $fnu[0]++;

} elseif ($i == 11 and $falta11 > 15) {
    echo " tem $falta11 faltas, ele passou o limites de faltas\n";
    $fu[0]++;
}

if ($i == 12 and $falta12 <= 15){
    echo " tem $falta12 faltas, ele nao passou o limites de faltas\n";
    $fnu[0]++;

} elseif ($i == 12 and $falta12 > 15) {
    echo " tem $falta12 faltas, ele passou o limites de faltas\n";
    $fu[0]++;
}

}

echo "$fnu[0] alunos nao ultrapassaram o numero de faltas e $fu[0] alunos ultrapassaram o numero de faltas\n";

?>
