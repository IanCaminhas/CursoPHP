<?php
    //Array multidimensional ou matriz
    $mat = [ 
        [1, 2, 3],
        [2, 4, 6]
    ];
    //Saída: Array ( [0] => Array ( [0] => 1 [1] => 2 [2] => 3 ) [1] => Array ( [0] => 2 [1] => 4 [2] => 6 ) )
    print_r($mat);
    echo "<br>";

    //Saída: 6
    echo $mat[0][1] . "<br>"; //acessando primeiro array e o segundo elemento
    echo $mat[1][2] . "<br>"; //acessando segundo array e o último elemento

    /*Saída: 2. 
        Count também funcionar para matriz. No caso, 2 significa 2 arrays
    */
    echo count($mat) . "<br>";
    //Saída: 3. Também funciona para o array interno. Array da ppsição 0 possui 3 elementos
    echo count($mat[0]);
?>