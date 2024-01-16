<?php
    //array_reverse() -> inverte o array. Essa função não altera a estrutura do array original

    $arr = [1, 2, 3, 4, 5];

    $arrRev = array_reverse($arr);

    //Saída: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
    print_r($arr);
    echo "<br>";
    //Saída: Array ( [0] => 5 [1] => 4 [2] => 3 [3] => 2 [4] => 1 )
    print_r($arrRev);
    echo "<br>";

    $dados = ["Ian", 12, true, [1,2]];

    $dadosRev = array_reverse($dados);
    //Saída: Array ( [0] => Array ( [0] => 1 [1] => 2 ) [1] => 1 [2] => 12 [3] => Ian )
    print_r($dadosRev);

?>