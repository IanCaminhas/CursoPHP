<?php

    $frase = "testando o case de uma palavra <br>";
    $fraseInicialMaiuscula = "Testando o case de uma palavra <br>";
    $frase3 = "testando o case de todas as palavras";

    //Primeira letra em maiúsculo. Saída: Testando o case de uma palavra
    echo ucfirst($frase);
    /* Como a primeira letra está maiúscula, permanece maiúscula.
        Saída: Testando o case de uma palavra
    */
    echo ucfirst($fraseInicialMaiuscula);

    /* Alterando a inicial de todas as palavras.
        Saída: Testando O Case De Todas As Palavras
    */
    echo ucwords($frase3);

?>