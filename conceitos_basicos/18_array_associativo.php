<?php

    $arr = ['nome' => 'Shark', 'patas'=> 4, 'cor' => 'Marrom'];

    //Pegando o valor pela chave. Saída: Shark
    echo $arr['nome'];
    echo "<br>";

    //imprimindo todo o array associativo. Saída: Array ( [nome] => Shark [patas] => 4 [cor] => Marrom )
    print_r($arr);
    echo "<br>";
    //Saída: 4
    echo $arr['patas'];

    echo "<br>";

    $arrAssoc = ['Chave' => 'valor', 'bool' => true];

    echo "<br>";

    //Array ( [Chave] => valor [bool] => 1 )
    print_r($arrAssoc);

?>