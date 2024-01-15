<?php
    //Array associativo
    $carro = [
        'marca' => 'Fiat Toto',
        'direção' => 'elétrica',
        'teto_solar' => true,
        'câmbio' => 'automática com modo manual de 6 marchas',
        'tração' => 'dianteira'
    ];

    $chaves = array_keys($carro);
    //Saída: Array ( [0] => marca [1] => direção [2] => teto_solar [3] => câmbio [4] => tração )
    print_r($chaves);
    echo "<br>";

    $valores = array_values($carro);
    //Saída: Array ( [0] => Fiat Toto [1] => elétrica [2] => 1 [3] => automática com modo manual de 6 marchas [4] => dianteira )
    print_r($valores);
    echo "<br>";
?>