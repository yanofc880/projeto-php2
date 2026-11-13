<?php
$nota1 = readline ("qual a nota do 1 aluno?");
$nota2 = readline ("qual a nota do 2 aluno?");
$nota3 = readline ("qual a nota do 3 aluno?");
$nota4 = readline ("qual a nota do 4 aluno?");
$nota5 = readline ("qual a nota do 5 aluno?");

    for ($i = 1; $i <= 5; $i++){
    echo "$i aluno -";
if ($i == 1) 
    echo " a nota do 1 aluno foi $nota1\n";

if ($i == 2) 
    echo " a nota do 2 aluno foi $nota2\n";

if ($i == 3) 
    echo " a nota do 3 aluno foi $nota3\n";

if ($i == 4) 
    echo " a nota do 4 aluno foi $nota4\n";

if ($i == 5) 
    echo " a nota do 5 aluno foi $nota5\n";
}

?>