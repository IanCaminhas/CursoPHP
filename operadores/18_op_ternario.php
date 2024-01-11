<?php
    //Saída: Deu true
    echo 20 > 10 ? "Deu true <br>" : "Deu false <br>";

    //Saída: Deu false
    echo 20 > 50 ? "Deu true <br>" : "Deu false <br>";

    $a = 10;
    $b = 5;

    //Saída: Deu true
    echo $a >= $b ? "Deu true <br>" : "Deu false <br>";

    //Saída: Deu false
    echo $a === $b ? "Deu true <br>" : "Deu false <br>";

    //Saída: Deu false
    echo $a === $b && 10 > 5 ? "Deu true <br>" : "Deu false <br>";

?>