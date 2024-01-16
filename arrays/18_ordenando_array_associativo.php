<?php
    $arr = [
        'FC Barcelona' => 6,
        'Ajax' => 4,
        'Milan' => 7,
        'Real Madrid' => 14
    ];
    //Ordenação em ordem crescente, considerando o valor da chave
    asort($arr);
    //Saída: Array ( [Ajax] => 4 [FC Barcelona] => 6 [Milan] => 7 [Real Madrid] => 14 )
    print_r($arr);

    echo "<br>";

    $arr2 = [
        'FC Barcelona' => 6,
        'Ajax' => 4,
        'Milan' => 7,
        'Real Madrid' => 14
    ];
    //Ordenação em ordem decrescente, considerando o valor da chave
    arsort($arr2);
    //Saída: Array ( [Real Madrid] => 14 [Milan] => 7 [FC Barcelona] => 6 [Ajax] => 4 )
    print_r($arr2);
    echo "<br>";

    //Ordenando pelas chaves do array associativo
    $arr3 = [
        'FC Barcelona' => 6,
        'Ajax' => 4,
        'Milan' => 7,
        'Real Madrid' => 14
    ];

    //Ordenando pelo valor das chaves. A ordem é crescente
    ksort($arr3);
    //Saída: Array ( [Ajax] => 4 [FC Barcelona] => 6 [Milan] => 7 [Real Madrid] => 14 )
    print_r($arr3);
    echo "<br>";

     //Ordenando pelo valor das chaves. A ordem é decrescente
     krsort($arr3);
     //Saída: Array ( [Real Madrid] => 14 [Milan] => 7 [FC Barcelona] => 6 [Ajax] => 4 )
     print_r($arr3);
     echo "<br>";
?>