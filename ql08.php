<?php

echo "ola seja bem vindo a escola, selecione no menu o que voce deseja";

$opcao = -1;

while ($opcao != 0){
    echo "\n1 - Cadastrar aluno";
    echo "\n2 - Consultar aluno";
    echo "\n3 - Excluir aluno";
    echo "\n0 - Sair";

    $opcao = readline("\nEscolha uma opção: ");
}
echo "espero ter ajudado";
?>