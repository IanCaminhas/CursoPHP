<?php
    /* Saída: Comparação 1 
       Foi realizada aqui uma conversão de tipos. 
       Em outras palavras, foi analisado apenas o valor ignorando o tipo.
    */
    if(5 == "5") {
        echo "Comparação 1 <br>";
    }

    /*Saída: sem saída no navegador
      Aqui foi comparado o valor e o tipo.
      Os valores são iguais, mas os tipos aqui são distintos
    */
    if(5 === "5") {
        echo "Comparação 2 <br>";
    }

     /*Saída: Comparação 3 
      Aqui foi comparado o valor e o tipo.
       Os tipos aqui são iguais e os valores também.
    */
    if(5 === 5) {
        echo "Comparação 3 <br>";
    }

    $a = 4;
    $b = 4;
    $c = "4";

    /*Saída: Comparação 4 
      Aqui foi comparado o valor e o tipo.
       Os tipos aqui são iguais e os valores também.
    */
    if($a === $b) {
        echo "Comparação 4 <br>";
    }

    /*Saída: sem saída no navegador
      Aqui foi comparado o valor e o tipo.
      Os valores são iguais, mas os tipos aqui são distintos
    */
    if($a === $c) {
        echo "Comparação 5 <br>";
    }
?>