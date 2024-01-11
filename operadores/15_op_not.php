<?php
    //Saída: A operação 1 é verdadeira
    if(5 > 2) {
        echo "A operação 1 é verdadeira <br>";
    }
    //Saída: sem saída no navegador, pois resulta false. Fiz um true virar false
    if(!(5 > 2)) {
        echo "A operação 2 é verdadeira <br>";
    }

    //Saída: A operação 3 é verdadeira
    if(!(5 > 20)) {
        echo "A operação 3 é verdadeira <br>";
    }

    $a = 10;
    $b = 20;

    //Saída: A operação 4 é verdadeira. Fiz um false virar true
    if(!($a >= $b)) {
        echo "A operação 4 é verdadeira <br>";
    }
?>