<?php
    // A definição do contador
    $x = 0 ;

    /*
    while($x < 10) é o início/definição da estrutura
    Saída:
    0
    1
    2
    3
    4
    5
    6
    7
    8
    9
    */
    while($x < 10) {
        //Corpo do loop
        echo $x . "<br>";
        //Incremento do contador
        $x++;
    }

    echo "Continuando código <br>";

    // A definição do contador
    $y = 0;

    /*Saída:
      0
      2
      4
      6
      8
    */
    while($y <= 10) {
        //Corpo do loop
        echo $y . "<br>";
        //Incremento do contador
        $y += 2;
    }

    echo "Continuando código <br>";

    // A definição do contador
    $z = 10;

    /*Saída:
        10
        9
        8
        7
        6
        5
        4
        3
        2
        1  
    */
    while($z > 0) {
        //Corpo do loop
        echo $z . "<br>";
        //Incremento do contador
        $z--;
    }

    echo "Continuando código <br>";

     // A definição do contador
     $a = 10;

     /*
        9
        7
        5   
        3
        1
     */
     while($a > 0) {
        //Corpo do loop
        if($a % 2 != 0) {
            echo $a . "<br>";
        }
        //Incremento do contador
        $a--;
    }
?>