<?php
    //Saída: Entrou no if
    if(5 > 2 ) {
        echo "Entrou no if <br>";
    } else {
        echo "Entrou no else <br>";
    }

    //Saída: Entrou no else 2
    if("teste" === 5) {
        echo "Entrou no if 2<br>";
    } else {
        echo "Entrou no else 2<br>";
    }

    $a = 10;
    $b = 20;

    //Saída: Entrou no else 3
    if($a > $b) {
        echo "Entrou no if 3<br>";
    } else {
        echo "Entrou no else 3<br>";
    }

    $msg = "Entrou no else 4 <br>";

    //Saída: Entrou no else 4
    if($a > $b) {
        echo "Entrou no if 4<br>";
    } else {
        echo $msg;
    }
?>