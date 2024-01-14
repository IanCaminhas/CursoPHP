<?php

    $str = "Esta é a minha string";

    $minha = substr($str, 10, 5); // STRING PAI, INDICE INICIAL, COMPRIMENTO DA PALAVRA

    /*Saída: 
        Esta é a minha string. 
        Perceba: a string original não é modificada */
    echo $str . "<br>";
    //Saída: minha
    echo $minha . "<br>";

    $str2 = "Testando esta string";

    /*Não informei o último parâmetro, pois vou vou pegar o 
    caractere da posição 8 até a última posição da string
    */
    $novaString = substr($str2, 8); //OMITIR COMPRIMENTO = PEGAR ATÉ O FIM 

    //Saída: esta string
    echo $novaString . "<br>";

    $str3 = "Testando esta string abc";
    /*
        Vou vou pegar o 
        caractere da posição 8 e ignorar os 3 últimos caracteres da string. 
    */
    $novaString2 = substr($str3, 8, -3); //COMPRIMENTO NEGATIVO = REMOVER DO ÚLTIMO ÍNDICE

    //Saída: esta string
    echo $novaString2 . "<br>";






?>