<?php

    //O ideal é manter apenas com uma das sintaxes

    $nome = "Ian";
    $idade = 29;
    $profissao = "Estudante";

    //Saída: Eu sou o Ian, tenho 29 anos e atuo como Estudante
    echo "Eu sou o $nome, tenho $idade anos e atuo como {$profissao} <br>";
    /*Segunda forma de realizar a interpolação:
    Saída: Eu sou o Ian, tenho 29 anos e atuo como Estudante */
    echo "Eu sou o $nome, tenho $idade anos e atuo como {$profissao} <br>";
?>