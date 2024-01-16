<?php
    /* array_diff() -> verifica a diferença entre dois ou mais arrays
    Esta função aceita um número indeterminado de arrays */

    $arr1 = [1, 2, 3];
    $arr2 = [2, 4, 6];

    $diff = array_diff($arr1, $arr2);

    /*Retorna os elementos que estão em intersecção. 
    Qual a diferençao do array 1 para o array 2 ? 
    Saída: Array ( [0] => 1 [2] => 3 )....
    */
    print_r($diff);
    echo "<br>";

    $diff2 = array_diff($arr2, $arr1);
    //Saída: Array ( [1] => 4 [2] => 6 )
    print_r($diff2);
    echo "<br>";

    $arr3 = [4, 6];

    $diff3 = array_diff($arr2, $arr1, $arr3);
    //Saída: Array ()
    print_r($diff3);
    echo "<br>";
?>