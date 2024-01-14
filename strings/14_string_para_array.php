<?php
    $frase = "Testando o explode";

    $fraseArray = explode(" ", $frase);

    //Saída: Array ( [0] => Testando [1] => o [2] => explode )
    print_r($fraseArray);
    
    echo "<br>";

    $fraseArray2 = explode(",", $frase);

    /*
        Como não existe o delimitador, vai exibir a frase inteira.
        Saída:
        Array ( [0] => Testando o explode )
    */
    print_r($fraseArray2);
    echo "<br>";

    $fraseB = "Carro, Avião, Barco, Navio";

    $fraseBArray = explode(",", $fraseB);
    //Saída: Array ( [0] => Carro [1] => Avião [2] => Barco [3] => Navio )
    print_r($fraseBArray);
    echo "<br>";

    /* Posso fazer string para array usando for ao invés do explode()
        Saída:
        Carro
        Avião
        Barco
        Navio
    */

    for ($i=0; $i < count($fraseBArray); $i++) {
        echo "$fraseBArray[$i] <br>";
    }
?>