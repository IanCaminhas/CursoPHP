<?php

    $a = 1;
    $b = "1";

    /*Saída: sem saída no navegador. Os valores são iguais, mas os tipos não. 
      Os tipos são ignorados. */
    if($a != $b) {
        echo "Testando diferença 1<br>";
    }
    /*Saída: Testando diferença 2
        Os valores são iguais, porém os tipos são diferentes. Agora o tipo é comaparado!!
    */
    if($a !== $b) {
        echo "Testando diferença 2<br>";
    }

    //saída: Testando diferença 3
    if (1 !== 2) {
        echo "Testando diferença 3<br>"; 
    }
    //[] significa array vazio. saída: Testando diferença 4
    if([] != "abc") {
        echo "Testando diferença 4<br>"; 
    }
?>