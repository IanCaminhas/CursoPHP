<?php
    $teste = "xyz";

    //xyz global 1
    echo "$teste global 1 <br>";

    //if(true) = if(5>2)
    if(true) {
        $teste = "abc";
        //abc if
        echo "$teste if <br>";
    }
    //abc global 2
    echo "$teste global 2 <br>";

    function funcao() {

        $teste = "ola, tudo bem ";
        //ola, tudo bem local
        echo "$teste local <br>";
    }

    funcao();

    function testandoGlobal() {
        global $teste;

        $teste = 2;
        //2 global função
        echo "$teste global função <br>";
    }

    testandoGlobal();

    //2 global 3
    echo "$teste global 3 <br>"

    /* Em resumo:
        Para alterar o valor de uma variável no escopo de função, preciso 
        explicitar o global como foi realizado na função testandoGlobal().

        Outros blocos de códigos alteram o valor da variável global. Exemplo: if, swicth, etc.
    */

?>