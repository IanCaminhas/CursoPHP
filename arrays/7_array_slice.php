<?php
    $arr = [2, 4, 6, 8, 10, 12, 14, 16, 18];
    //Arg 1: array, Arg 2: posição inicial, Arg 3: Retorne o elemento da posição 1 mais 2 elementos
    $slice1 = array_slice($arr, 1, 3);
    //Saída: Array ( [0] => 4 [1] => 6 [2] => 8 )
    print_r($slice1);
    echo "<br>";

     $slice1 = array_slice($arr, 4, 4);
     //Saída: Array ( [0] => 10 [1] => 12 [2] => 14 [3] => 16 )
     print_r($slice1);
     echo "<br>";

    /*Se eu omitir o último argumento, 
    vou pegar o elementos da posição inicial e o restante. */
    $slice3 = array_slice($arr, 4);
    //Saída: Array ([0] => 10 [1] => 12 [2] => 14 [3] => 16 [4] => 18)
    print_r($slice3);
    echo "<br>";

    $slice4 = array_slice($arr, 4, -3);
    //Saída: Array ([0] => 10 [1] => 12)
    print_r($slice4);
    echo "<br>";
?>