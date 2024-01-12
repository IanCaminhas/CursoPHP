<?php

    $nome = "Ian";

    /* Saída:
        Testando for 0
        Testando for 1
        Testando for 2
        Testando for 3
        Ian
        Testando for 4
        Testando for 5
        Testando for 6
        Testando for 7
        Testando for 8
        Testando for 9
    */
    for($i = 0; $i < 10; $i++) {

        if($i == 4) {
            echo "$nome <br>";
        }

        echo "Testando for $i <br>";
    }

    echo "<br>";

    //Usando break

    /* Saída:
    Testando for 0
    Testando for 1
    Testando for 2
    Testando for 3
    Ian
    Testando for 4
    Testando for 5
    Testando for 6
    Testando for 7
    */

    for($j = 0; $j < 10; $j++) {

        if($j == 4) {
            echo "$nome <br>";
        }

        if($j == 8) {
            break;
        }

        echo "Testando for $j <br>";
    }


?>