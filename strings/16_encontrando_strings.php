<?php

    $str = "Estamos testando o método strpos. Com o strpos podemos encontrar strings";

    $testeEncontrar = strpos($str, "strpos");
    //Saída: 27. Representa o índice da primeira ocorrência do texto strpos
    echo "$testeEncontrar <br>";

    $palavra = "Com";
    
    $testeEncontrar2 = strpos($str, $palavra);
    //Saída: 35
    echo "$testeEncontrar2 <br>"; 

    $palavra2 = "to";
    
    $testeEncontrar3 = strpos($str, $palavra2);
    /*Saída: 22
        strpos procura pedaços de strings também.*/
    echo "$testeEncontrar3 <br>"; 

    $testeEncontrar4 = strpos($str, "Java");

    //Saída: não aparece nada no navegador, pois o retorno é false
    echo "$testeEncontrar4 <br>";

    //Saída: Palavra não encontrada
    if($testeEncontrar4 === false) {
        echo "Palavra não encontrada <br>";
    }
?>