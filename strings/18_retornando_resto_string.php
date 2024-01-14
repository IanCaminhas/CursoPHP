<?php

    $str = "Testando o resto da string, pra ver se dá certo";

    $resto = strstr($str, "resto");
    //Saída: resto da string, pra ver se dá certo
    echo "$resto <br>";

    $s = "string";

    $resto2 = strstr($str, $s);
    //Saída: string, pra ver se dá certo
    echo "$resto2 <br>";

    //Saída: Não encontramos a string!
    if(strstr($str, ".NET") === false) {
        echo "Não encontramos a string! <br>";
    }
?>