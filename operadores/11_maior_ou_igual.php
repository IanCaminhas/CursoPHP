<?php

    $a = 4;
    $b = 5;
    $c = 6;
    $d = 6;
    $e = 7;

    //Saída: sem saída no navegador
    if($a > $b) {
        echo "Comparação 1<br>";
    }

    //Saída: Comparação 2
    if($b > $a) {
        echo "Comparação 2<br>";
    }

     //Saída: Comparação 3
     if($d >= $c) {
        echo "Comparação 3<br>";
    }

     //Saída: Comparação 4
     if($d >= $a) {
        echo "Comparação 4<br>";
    }

     //Saída: sem saída no navegador
     if($d >= $e) {
        echo "Comparação 5<br>";
    }

?>