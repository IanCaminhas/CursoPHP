<?php

    //Saída: A operação 1 é verdadeira
    if(5 > 2 || 3 < 4) { // true e true
        echo "A operação 1 é verdadeira <br>";
    }

    //Saída: A operação 2 é verdadeira
    if(5 > 2 || 30 < 4) { // true e false
        echo "A operação 2 é verdadeira <br>";
    }

     //Saída: A operação 3 é verdadeira
     if(5 > 20 || 3 < 4) { // false e true
        echo "A operação 3 é verdadeira <br>";
    }

     //Saída: sem saída no navegador, pois resulta false
     if(5 > 20 || 30 < 4) { // false e false
        echo "A operação 4 é verdadeira <br>";
    }

    $a = 10;
    $b = 20;
    $c = 30;
    $d = 40;

    //Saída: A operação 5 é verdadeira
    if($a > $b || $d > $c) {//false e true
        echo "A operação 5 é verdadeira <br>";
    }

    //Saída: A operação 6 é verdadeira
    if(($a > $b || $d > $c) && $c < $d) {
        echo "A operação 6 é verdadeira <br>";
    }

     //Saída: A operação 7 é verdadeira
     if(($a > $b && $d > $c) || $c < $d) {
        echo "A operação 7 é verdadeira <br>";
    }
?>