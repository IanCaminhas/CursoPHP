<?php

    function teste() {
        $a =0;
        $a++;

        echo "$a <br>";
    }
    
    /*Todas as invocação imprimem 1 no navegador. 
    Motivo: a função é resetada após a execução, ou seja, a função não persiste em escopo local. */
    teste();
    teste();
    teste();

    function testeStatic() {
        static $a =0;
        $a++;

        echo "$a <br>";
    }
    /*Com o static, o escopo vai ser mantido e o valor vai ser acrescido ou decrementado. Em suma, o valor é mantido entre 
    chamadas de funções */
    //Saída: 1
    testeStatic();
    //Saída: 2
    testeStatic();
    //saída: 3
    testeStatic();

?>