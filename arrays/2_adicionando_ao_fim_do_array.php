<?php
    $arr = [1,2,3];

    $arr[] = 4;
    //Saída: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )
    print_r($arr);
    echo "<br>";    

    $arr[] = 5;
    //Saída: Array ([0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5)
    print_r($arr);
    echo "<br>";

    $arr2 = [];
    $arr2[] = 1;

    //Saída: Array ([0] => 1)
    print_r($arr2);
    echo "<br>";
?>