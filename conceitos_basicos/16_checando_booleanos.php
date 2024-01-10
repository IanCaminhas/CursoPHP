<?php 
    $a = true;
    
    if(is_bool($a)) { //true
        echo "É um booleano 1<br>";
    }

    if(is_bool(0)) { //false, pois a função considera 0 como um número.
        echo "É um booleano 2<br>";
    }

    if(is_bool(false)) { //false
        echo "É um booleano 3<br>";
    }

    if(0 == false) { //true
        echo "0 é considerado falso! <br>";
    }

?>