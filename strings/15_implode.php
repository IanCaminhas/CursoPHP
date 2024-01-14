<?php

    $arr = ["Morango", "Laranja", "Melancia", "Morango"];

    /*
        1º argumento: separador
        2º argumento: array 
    */

    $str = implode(", ", $arr);
    //Saída: Morango, Laranja, Melancia, Morango. Essa saída foi uma string
    echo "$str <br>";

    $arr2 = ["Roda", "Motor", "Freio", "Escapamento"];

    $str2 = implode(" - ", $arr2);

    //Saída: Roda - Motor - Freio - Escapamento
    echo "$str2 <br>";
?>