<?php

    /*shuffle() -> reorganizar os itens em ordem aleatória. Altera a estrutura original do array.
        À medida que vou executando a função, um array diferente é gerado
    */

    $arr = range(1, 10);

    shuffle($arr);
    //Saída: Array ( [0] => 10 [1] => 6 [2] => 5 [3] => 9 [4] => 1 [5] => 3 [6] => 8 [7] => 7 [8] => 4 [9] => 2 )
    print_r($arr);
    echo "<br>";

?>