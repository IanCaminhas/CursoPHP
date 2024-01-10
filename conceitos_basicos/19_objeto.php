<?php

    class Pessoa {
        function falar() {
            echo "Olá pessoal!";
        }
    }

    $ian = new Pessoa();
    $ian->nome = "Ian";

    //saída: Ian
    echo $ian->nome;

    echo "<br>";

    //Saída: Olá pessoal!
    $ian->falar();

?>