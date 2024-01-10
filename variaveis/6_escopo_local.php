<?php

    $x = 10;
    //Saída: 10
    echo "$x global <br>";

    function teste() {
        $x = 5;

        echo "$x local <br>";
    }
    //Saída: 5
    teste();
    //Saída: 10
    echo "$x global <br>";

    function testando() {
        $x = 12;

        echo "$x local 2 <br>";
    }

    $x = 99;

    //Saída: 12
    testando();

    //Saída: 5
    teste();
    
    //Saída: 99
    echo "$x global <br>";

    //Resumo: escopo global não é alterado pelo local. Nem o escopo local é alterado pelo global.

?>