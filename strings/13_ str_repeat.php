<?php

    $str = "Teste";
    // 5 vai ser o número de repetições.
    $strRepetida = str_repeat($str, 5);

    //Saída: TesteTesteTesteTesteTeste
    echo "$strRepetida <br>";

    $frase = "Testando repetição por frase";
    //Saída: Testando repetição por fraseTestando repetição por fraseTestando repetição por frase
    echo str_repeat($frase, 3);

?>