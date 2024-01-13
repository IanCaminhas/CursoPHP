<?php

    function somaSemRetorno($n1, $n2) {
        
        echo $n1 + $n2 . "<br>"; 
    }

    //Saída: 8
    somaSemRetorno(4,4);

    function somaComRetorno($n1, $n2) {
        return $n1 + $n2;
    }
    //Saída: 8
    echo somaComRetorno(4, 4) . "<br>";

    $x = somaComRetorno(2,4);
    //Saída: 6
    echo $x . "<br>";

    $y = somaComRetorno($x,19);
    //Saída: 25
    echo $y . "<br>";

    function testeRetorno() {
        return "Testando";
    }

    $z = testeRetorno();

    //Saída: Testando
    echo $z . "<br>";
?>