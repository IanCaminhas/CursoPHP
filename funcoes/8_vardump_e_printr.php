<?php
    $arr = [
        "Teste",
        123,
        12393.45843,
        true,
        [1,2,3]
    ];

    /* Saída:
        Array ( [0] => Teste [1] => 123 [2] => 12393.45843 [3] => 1 [4] => Array ( [0] => 1 [1] => 2 [2] => 3 ) )
    */
    print_r($arr);

    echo "<br>";

    /* Saída:
        array(5) { [0]=> string(5) "Teste" [1]=> int(123) [2]=> float(12393.45843) [3]=> bool(true) [4]=> array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) } }

    */
    var_dump($arr);

    //var_dump exibe de forma mais detalhada
?>