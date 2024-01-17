<?php

    class Animal {

        public $nome;

        function escolherNome($nome) {
            $this->nome = $nome;
        }

        function latir() {
            return "Au au <br>";
        }

        function latirForte() {
            return strtoupper($this->latir());
        }

    }

    $frida = new Animal;
    //Saída: O nome do animal é: ... Ainda não foi instanciado
    echo "O nome do animal é: $frida->nome <br>";

    $frida->escolherNome("Frida");
    //Saída: Au au
    echo $frida->latir() . "<br>";
    //saída: AU AU
    echo $frida->latirForte() . "<br>";

?>