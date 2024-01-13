<?php

    function teste($a = "teste") {

        echo "O valor de A é: $a <br>";
        
    }
    /*Saída: O valor de A é: teste. 
      Como não passei parâmetro nenhum, o parâmetro assumiu o valor "teste"(default) */
    teste();
    //Saída: O valor de A é: xyz
    teste("xyz");

    /*
    function testando($a = "x", $b) {
        echo "O valor de a é: $a e de b é: $b <br>";
    }

    testando("Sei lá");
    Isso dá um fatal error, pois o primeiro argumento é o default. Sugestão é colocar o argumento
    default como segundo argumento.
    */

    function testando($b, $a = "x") {
        echo "O valor de a é: $a e de b é: $b <br>";
    }
    //Saída: O valor de a é: x e de b é: 1
    testando("1");
    //Saída: O valor de a é: 2 e de b é: 1
    testando("1", "2");

?>