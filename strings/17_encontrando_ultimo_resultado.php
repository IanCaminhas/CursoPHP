<?php

    //Ojeitvo: ver a função strrpos

    $str = "Testando encontrado palavra teste, em uma string que tem teste";

    $palavra = strrpos($str, "teste");
    //Saída: 57. O índice da última ocorrência(de trás para frente)
    echo "$palavra <br>";
    //Aqui foi usada outra função: a contrária
    $palavra2 = strpos($str, "teste");
    //Saída: 28. O indice da primeira ocorrência(de frente para trás)
    echo "$palavra2 <br>";

    //Saída: A palavra Java não foi encontrada
    if(strrpos($str, "Java") === false) {
        echo "A palavra Java não foi encontrada";
    }
?>