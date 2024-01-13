<?php

    $a = 10;

    $b = 15;

    function testeEscopo() {

        $a = 5;

        //Para usar uma variável global, preciso inserir a palavra reservada global
        global $b;

        $a++;
        $b++;

        //Saída: ESCOPO LOCAL DE A: 6
        echo "ESCOPO LOCAL DE A: $a<br>";
        //Saída: ESCOPO GLOBAL DA FUNÇÃO DE B: 16
        echo "ESCOPO GLOBAL DA FUNÇÃO DE B: $b <br>";

        
    }

    //Saída: ESCOPO GLOBAL DE A: 10
    echo "ESCOPO GLOBAL DE A: $a<br>";

    testeEscopo();
    //Saída: ESCOPO GLOBAL DA FUNÇÃO DE B 2: 16
    echo "ESCOPO GLOBAL DA FUNÇÃO DE B 2: $b <br>";


    function testeStatic() {
        static $c = 0;
        $c++;
        echo "ESCOPO STATIC DE C: $c <br>";
    }

    //Saída: ESCOPO STATIC DE C: 1
    testeStatic();
    //Saída: ESCOPO STATIC DE C: 2
    testeStatic();

    //Em suma: com static, o valor é mantido após a execução de uma função

?>