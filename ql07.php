<?php
$nota1 = readline ("qual a nota do 1 aluno?");
$nota2 = readline ("qual a nota do 2 aluno?");
$nota3 = readline ("qual a nota do 3 aluno?");
$nota4 = readline ("qual a nota do 4 aluno?");
$nota5 = readline ("qual a nota do 5 aluno?");

$soma = $nota1 + $nota2 + $nota3 + $nota4 + $nota5 ;
$contador = 1;

while ($contador <= 1 ) {
    echo "$nota1 + $nota2 + $nota3 + $nota4 + $nota5 = ". $soma  ;
    $contador ++;
}
?>