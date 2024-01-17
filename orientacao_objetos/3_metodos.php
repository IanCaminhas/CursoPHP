<?php
    class Pessoa {
        function falar() {
            echo "Olá, eu sou um objeto! <br>";
        }

        function somar($x, $y) {
            echo $x + $y . "<br>";
        }
    }

    $p1 = new Pessoa;
    //Saída: Olá, eu sou um objeto!
    $p1->falar();
    //Saída: Olá, eu sou um objeto!
    $p1->falar();

    $p2 = new Pessoa;
    //Saída: Olá, eu sou um objeto!
    $p2->falar();
    //Saída: 4
    $p1->somar(2, 2);
    //Saída: 22
    $p2->somar(10, 12);

?>