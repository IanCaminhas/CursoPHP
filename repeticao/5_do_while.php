<?php

    $j = 0;
    $teste = "Ian";

    /*
        Testando do while 0
        Testando do while 1
        Testando do while 2
        Testando do while 3
        Testando do while 4
        Testando do while 5
        Testando do while 6
        Testando do while 7
        Testando do while 8
        Testando do while 9
    */
    do {
        echo "Testando do while $j <br>";

        if($j == 2) {
            echo "$teste <br>";
        }

        $j++;
    }while($j < 10);

    $i = 10;

    /* Saída:
    Testando do while 2 10
    Testando do while 2 9
    Testando do while 2 8
    Testando do while 2 7
    Testando do while 2 6
    Testando do while 2 5
    Testando do while 2 4
    Testando do while 2 3
    Testando do while 2 2
    Testando do while 2 1
    */
    do {
        echo "Testando do while 2 $i <br>";
        $i--;
    }while($i > 0);

?>