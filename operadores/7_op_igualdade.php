<?php
    //Saída: Comparação verdadeira 1
    if(3 == 3) {
        echo "Comparação verdadeira 1<br>";
    }

    //Nenhuma saída no navegador
    if(3 == 4) {
        echo "Comparação verdadeira 2<br>";
    }

    $a = 12;
    $b = 12;
    $c = 100;

    //Saída: Comparação verdadeira 3
    if($a == $b) {
        echo "Comparação verdadeira 3<br>";
    }
    
    //Nenhuma saída no navegador
    if($a == $c) {
        echo "Comparação verdadeira 4<br>";
    }

    $nome = "Ian";
    $nomeDoSistema = "Ian";

    //Saída: O nome coincide
    if($nome == $nomeDoSistema) {
        echo "O nome coincide 1<br>";
    }

    /*Atibuição realozada dentro do if. 
      Aqui foi feita uma atribuição. Isso sempre vai dar true.
      Esse true significa uma atribuição realizada com sucesso.
      Exemplo abaixo: os nomes não são iguais e o resultado é true.
    */

    $jogadorIbis = "João da Silva";
    $jogadorIbisSistema = "Fernando";

    if ($jogadorIbis = $jogadorIbisSistema) {
        echo "O nome coincide 2<br>";
    }


?>