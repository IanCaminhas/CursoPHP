<?php

    //Adicionando valores

    $arr = [];
    //Saída: Array ()
    print_r($arr);
    echo "<br>";

    $arr[0] = 10;
    //Saída: Array ([0] => 10)
    print_r($arr);
    echo "<br>";

    $arr[1] = 15;
    //Saída: Array ([0] => 10 [1] => 15)
    print_r($arr);
    echo "<br>";

    $arr[5] = 25;
    //Saída: Array ([0] => 10 [1] => 15 [5] => 25)
    print_r($arr);
    echo "<br>";

    //Modificando valores

    $arr[1] += 55;
    //Saída: Array ([0] => 10 [1] => 70 [5] => 25)
    print_r($arr);
    echo "<br>";

    $arrAssoc = [];
    //Saída: Array ()
    print_r($arrAssoc);
    echo "<br>";

    $arrAssoc["carro"] = "Fiat 147";
    //Saída: Array ([carro] => Fiat 147)
    print_r($arrAssoc);
    echo "<br>";

    $arrAssoc["Motocicleta"] = "Honda Bros";
    //Saída: Array ([carro] => Fiat 147 [Motocicleta] => Honda Bros)
    print_r($arrAssoc);
    echo "<br>";
?>