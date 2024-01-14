<?php
    $palavra = "Testando";

    $palavraInvertida = strrev($palavra); //Função não muda a string original

    //Saída: Testando
    echo "$palavra <br>";
    //Saída: odnatseT
    echo "$palavraInvertida <br>";

    $frase = "Estou com prazo curto para estudar";

    $fraseInvertida = strrev($frase);

     //Saída: Estou com prazo curto para estudar
     echo "$frase <br>";
     //Saída: radutse arap otruc ozarp moc uotsE
     echo "$fraseInvertida <br>";
?>