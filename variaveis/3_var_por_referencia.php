<?php 
    $x = 10;

    $y =& $x;

    //Saída: 10
    echo $x;
    echo "<br>";

    //Saída: 10
    echo $y;
    echo "<br>";

    $y = 15;

    echo "Atribuição após ref";
    echo "<br>";
    //Saída: 15
    echo $x;
    echo "<br>";
    //Saída: 15
    echo $y;
    echo "<br>";

    $x = 20;

    echo "Atribuição após ref";
    echo "<br>";
    //Saída: 20
    echo $x;
    echo "<br>";
    //Saída: 20
    echo $y;
    echo "<br>";

    $nome = "Lionel Messi";

    $nome2 =& $nome;

    //Saída: Lionel Messi
    echo $nome;
    echo "<br>";
    //Saída: Lionel Messi
    echo $nome2;
    echo "<br>";

    $nome2 = "Carbajal";

    //Saída: Carbajal
    echo $nome;
    echo "<br>";
    //Saída: Carbajal
    echo $nome2;
    echo "<br>";

?>