<?php

    class Humano {
        public const OLHOS = 2;
        public const BRACOS = 2;
        public const PERNAS = 2;

        function mostrarContante() {
            //Ao invés de usar this, vou usar self para referenciar a constante
            echo self::BRACOS . "<br>";
        }
    }

    $h1 = new Humano;

    /*Para acessar a constante uso :: e não flecha
    Saída: 2 */
    echo $h1::OLHOS . "<br>";
    //Saída: 2
    $h1->mostrarContante();



?>