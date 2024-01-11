<?php
    //Estou convertendo a string "12" para um inteiro
    $a = (int) "12";

    //Saída: 12
    echo $a;
    echo "<br>";
    //Saída: 22
    echo $a + 10;
    //Saída: A é identico a 12
    if($a === 12) {
        echo "A é identico a 12 <br>";
    }

    $b = (float) "3.14843824";

    //B é idêntico a 3.14843824
    if($b === 3.14843824) {
        echo "B é idêntico a 3.14843824 <br>";
    }

    //Estou convertendo o inteiro 34 para a string "34"
    $c = (string) 34;
    //Saída: 34
    echo $c;
    echo "<br>";

    //Saída: C é idêntico a 34
    if($c === "34") {
        echo "C é idêntico a 34 <br>";
    }
?>