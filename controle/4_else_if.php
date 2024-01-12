<?php
    //Saída: Entrou no if 1 
    if(10 > 5) {
        echo "Entrou no if 1<br>";
    } else if (10 > 6 ) {
        echo "Entrou no else if 1<br>";
    }

    //Saída: Entrou no else if 2 
    if(10 < 5) {
        echo "Entrou no if 2<br>";
    } else if (10 > 6 ) {
        echo "Entrou no else if 2<br>";
    }

    //Saída: nenhuma sída no navegador, pois o if/else if são false.
    if(10 < 5) {
        echo "Entrou no if 3<br>";
    } else if (10 < 6 ) {
        echo "Entrou no else if 3<br>";
    } 

    //Saída: Entrou no else 4
    if(10 < 5) {
        echo "Entrou no if 4<br>";
    } else if (10 < 6 ) {
        echo "Entrou no else if 4<br>";
    } else {
        echo "Entrou no else 4<br>";
    }

    //Saída: Entrou no else if 2 5
    if(10 < 5) {
        echo "Entrou no if 5<br>";
    } else if (10 < 6 ) {
        echo "Entrou no else if 1 5<br>";
    } else if(11 > 1) {
        echo "Entrou no else if 2 5<br>";
    } else {
        echo "Entrou no else 5<br>";
    }

    $a = 10;
    $b = 5;
    $msg = "Entrou no else if 2 6<br>";

    if(10 < 5) {

        echo "Entrou no if 1 6<br>";

    } else if ($a > $b) {

        echo $msg;
        echo "<br>";

    } else if(11 > 1) {

        echo "Entrou no else if 3 6<br>";

    } else {

        echo "Entrou no else 6<br>";
    }


?>