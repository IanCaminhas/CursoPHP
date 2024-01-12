<?php

    //Saída: Deu certo! Entrou no if
    if(5>2) { //Condição verdadeira
        echo "Deu certo! Entrou no if 1<br>";
    }

    //Saída: sem saáda no navegador
    if(2 >=5) { //Condição falsa
        echo "Não vai entrar no if, porque deu false! <br>";
    }

    //Utilizando operador lógico. Saída: Deu certo! Entrou no if 2
    if(10 === 10 && 9 > 3) {
        echo "Deu certo! Entrou no if 2<br>";
    }

    $a = 10;
    $b = 5;
    $c = "Deu certo, Entrou no if 3<br>";

    //Saída: Deu certo, entrou no if 3
    if($a >= $b) {
        echo $c;
    }

?>