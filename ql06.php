<?php
$verif = readline ("qual a sua senha?");
$senha = 1234;

while ($verif != $senha) {
    echo "Senha incorreta!\n";
    $verif = readline("Tente novamente: ");
}

echo "Acesso liberado!";
?>