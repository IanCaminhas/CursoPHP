<?php

    //Resgatando e removendo elementos de um array. A  função usada é a array_splice()

    $arr = [1,2,3,4,5,6];
    //Arg1: array  Arg2: posição inicial Arg3: remove e retorna o elemento da posição inicial + posições
    $removidos = array_splice($arr, 1, 2);

    //Saída: Array ( [0] => 1 [1] => 4 [2] => 5 [3] => 6 )
    print_r($arr);
    echo "<br>";
    //Saída: Array ( [0] => 2 [1] => 3 )
    print_r($removidos);
    echo "<br>";

    $arr2 = [1,2,3,4,5,6];

    //Aqui estou removendo da posição 3 em diante
    $removidos2 = array_splice($arr2, 3);

    //Saída: Array ([0] => 1 [1] => 2 [2] => 3)
    print_r($arr2);
    echo "<br>";
    //Saída: Array ([0] => 4 [1] => 5 [2] => 6)
    print_r($removidos2);
    echo "<br>";

    $arr3 = [1,2,3,4,5,6];
    $removidos3 = array_splice($arr3, 1, -1 );

    //Saída: Array ( [0] => 1 [1] => 6 )
    print_r($arr3);
    echo "<br>";
    //Saída: Array ( [0] => 2 [1] => 3 [2] => 4 [3] => 5 )
    print_r($removidos3);
    echo "<br>";


?>