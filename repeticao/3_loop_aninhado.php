<?php

    $i = 1;

    $c = "Variável teste";

    while($i <= 10) {

        echo "Loop externo $i <br>";

       //segundo contador
       $j = 0;  

       echo "$c <br>";

       while ($j <= 5) {

            echo "Loop interno $j <br>";

            echo "$c 2 <br>";

            $j++;
       }

        $i++;
    }

    /*while não criam escopo local. Assim, os valores da variáveis $i e $j 
        são mantidos após a execução do while
    */

    //Saída: Valor final i: 11
    echo "Valor final i: $i <br>";
    //Saída: Valor final j: 6
    echo "Valor final j: $j <br>";
?>