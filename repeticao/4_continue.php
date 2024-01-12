<?php

    $a = 10;

    /* Saída:
        Exceutando o loop 10
        Exceutando o loop 9
        Exceutando o loop 8
        Exceutando o loop 7
        Pulou a execução 7
        Exceutando o loop 6
        Exceutando o loop 5
        Pulou a execução 5
        Exceutando o loop 4
        Exceutando o loop 3
        Exceutando o loop 2
        Exceutando o loop 1 
    */
    while($a > 0) {

        echo "Executando o loop $a <br>";

        if($a == 5 || $a == 7) {
            echo "Pulou a execução $a <br>";
            $a--;
            continue;
        }

        $a--;
    }

    echo "<br>";

    $b = 10;

    /* Saída:
        Executando o loop 10
        Executando o loop 9
        Executando o loop 8
        Executando o loop 7
        Pulou a execução 7
        Executando o loop 6
        Executando o loop 5
        Pulou a execução 5
        Executando o loop 4
        Terminando o loop break 4
    */
    while($b > 0) {

        echo "Executando o loop $b <br>";

        if($b == 5 || $b == 7) {
            echo "Pulou a execução $b <br>";
            $b--;
            continue;
        }

        if($b == 4) {
            echo "Terminando o loop break $b <br>";
            break;
        }

        $b--;
    }


?>