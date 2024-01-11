<?php 
    //Saída: sem saída no navegador, pois resulta false
    if(5 > 10 && 10 > 5) { //false e true
        echo "Entrou no if 1<br>";
    }

    //Entrou no if 2, pois resulta true
    if(50 > 10 && 10 > 5) { //true e true
        echo "Entrou no if 2<br>";
    }

     //Saída: sem saída no navegador, pois resulta false
     if(50 > 10 && 10 > 500) { //true e false
        echo "Entrou no if 3<br>";
    }

     //Saída: sem saída no navegador, pois resulta false
     if(50 > 100 && 10 > 500) { //false e false
        echo "Entrou no if 4<br>";
    }

    $a = 10;
    $b = 5;
    $c = 12;
    $d = 12;

    //Saída: Entrou no if 5
    if($a > $b && $c == $d) {
        echo "Entrou no if 5<br>";
    }

    //Saída: Entrou no if 6
    if($b <= $a && $c >= $d) {
        echo "Entrou no if 6<br>";
    }
    //Saída: sem saída no navegador, pois resulta false
     if($b === $a && $c > $d) {
        echo "Entrou no if 7<br>";
    }

    //Saída:Entrou no if 8
    if(($b <= $a && $c >= $d) && $a > $b) {
        echo "Entrou no if 8<br>";
    }

    //Saída:Entrou no if 9
    if($b <= $a && $c >= $d && $a > $b) {
        echo "Entrou no if 9<br>";
    }
?>