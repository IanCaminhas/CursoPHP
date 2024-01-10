<?php 
    //Array homogêneo
    $a = [1,2,3];

    /*
    Se eu imprimir o array na tela com echo, os elementos dos mesmos não vão ser exibidos
    echo $a;
    Saída: Array
    */
    //Saída: Array ( [0] => 1 [1] => 2 [2] => 3 )
    print_r($a);

    echo "<br>";

    //Eu consigo acessar um elemento do array com echo. saída: 1
    echo $a[0];
    //Array heterogêneo
    $arr = ["Ian", 1, true];

    echo "<br>";
    //Saída: Array ( [0] => Ian [1] => 1 [2] => 1 )
    print_r($arr);

    echo "<br>";
    //Saída: Ian
    print_r($arr[0]);

?>