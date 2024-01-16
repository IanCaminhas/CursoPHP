<?php

    $arr = [2, 4, 34, 34.1, 324, 12, 34, "teste"];

    $soma = array_sum($arr);

    /*Saída: Array ( [0] => 2 [1] => 4 [2] => 34 [3] => 34.1 [4] => 324 [5] => 12 [6] => 34 [7] => teste )
        A função ignorra o que não é número. teste não foi somado
    */
    print_r($arr);
    echo "<br>";

    //Saída: 444.1
    echo $soma;

?>