<?php 
    //Operadores de atribuição: +=, -=, /=, *= e %=
    $a = 0;
    //$a +=10 é o mesmo que eu fizer $a = $a + 10;
    $a +=10;
    //Saída: 10
    echo $a . "<br>";

    $b = 0;
    //$b -=10 é o mesmo que eu fizer $b = $b - 10;
    $b -=5;
    //Saída: -5
    echo $b . "<br>";

    $c = 5;
    //$c *= 2 é o mesmo que eu fizer $c = $c * 2;
    $c *= 2;
    //Saída: 10
    echo $c . "<br>";

    $d = 5;
    //$c *= 2 é o mesmo que eu fizer $d = $d/2;
    $d /= 2;
    //Saída: 2.5
    echo $d . "<br>";

    $e = 5;
    //$c *= 2 é o mesmo que eu fizer $d = $d/2;
    $e %= 2;
    //Saída: 1
    echo $e . "<br>";

    $f = 10;
    $x = 20;

    //$f = $f + $x
    $f += $x;
    //Saída: 30
    echo $f . "<br>";
?>