<?php 
    $arr = [1, 2, 3];
    //Saída: 3
    echo count($arr) . "<br>";

    $arr2 = range(1, 10);

    //Saída: 10
    echo count($arr2) . "<br>";

    $arr3 = ["Nome" => "Ian", "Idade" => 29, "Profissao" => "Estudante de TI"];

    //Saída: 3. Count também funciona com arrays associativos.
    echo count($arr3) . "<br>";
?>