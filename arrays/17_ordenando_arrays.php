<?php
    /*sort() -> função que ordena o array. 
        Essa função altera o array original. 
        Essa função ordena em ordem crescente

    rsort() -> função ordena em ordem decrescente
    */
    $arr = [2, 1, 334, 32, 123, 65, 38, 9999, 12, 4];

    sort($arr);
    //Saída: Array ( [0] => 1 [1] => 2 [2] => 4 [3] => 12 [4] => 32 [5] => 38 [6] => 65 [7] => 123 [8] => 334 [9] => 9999 )
    print_r($arr);
    echo "<br>";

    $arr2 = [2, 1, 334, 32, 123, 65, 38, 9999, 12, 4];

    rsort($arr2);
    //Saída: Array ( [0] => 9999 [1] => 334 [2] => 123 [3] => 65 [4] => 38 [5] => 32 [6] => 12 [7] => 4 [8] => 2 [9] => 1 )
    print_r($arr2);
    echo "<br>";

    $timesEspanhol = ['Málaga', 'FC Barcelona', 'Cádiz', 'Atlético de Madrid', 'Sevilha'];

    //Ordenando em ordem alfabética
    sort($timesEspanhol);
    //Saída: Array ( [0] => Atlético de Madrid [1] => Cádiz [2] => FC Barcelona [3] => Málaga [4] => Sevilha )
    print_r($timesEspanhol);
?>