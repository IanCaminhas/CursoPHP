<?php

    //array_merge() -> Unir 2 ou mais arrays(fazer um merge)

    $arr1 = [1, 2, 3];
    $arr2 = [10, 40, 100];
    $arr3 = [2.1, 44.5, 43.3];
    $arr = ["asd", "as", "a"];

    $arrMerge = array_merge($arr1, $arr2, $arr3, $arr, [0, 1]);

    //Saída: Matriz ([0] => 1 [1] => 2 [2] => 3 [3] => 10 [4] => 40 [5] => 100 [6] => 2,1 [7] => 44,5 [8] => 43,3 [9] => asd [10] => como [11] => a [12] => 0 [13] => 1 )
    print_r($arrMerge);
    echo "<br>";


?>