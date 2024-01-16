<?php

    $arr = [1, 2, 4, 19, 234, 12, 34, 5, 12];

    function soma($a, $b) {
        return $a + $b;
    }

    function subtracao($a, $b) {
        return $a - $b;
    }

    //"soma" se refere à função soma()
    $resultado1 = array_reduce($arr,"soma");
    //Saída: 323
    echo "$resultado1 <br>";

    $resultado2 = array_reduce($arr,"subtracao");
    //Saída: -323
    echo "$resultado2 <br>";

?>