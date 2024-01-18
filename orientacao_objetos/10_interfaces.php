<?php

    interface Caracteristicas {
        const nome = "Rodrigo";

        public function falar();

    }

    class Humano implements Caracteristicas {

        public $idade = 29;

        /* Se eu não implementar o método da interface Caracteristicas,
         o seguinte erro será gerado:
         Fatal error: Class Humano contains 1 abstract method and must therefore be declared abstract or implement 
         the remaining methods (Caracteristicas::falar) in
        */
        public function falar() {
            echo "Olá mundo! <br>";
        }

        public function dizerNome() {
            //Também posso acessar propriedades de uma interface. Para isso, uso o self. Essa constante não pode ser alterada
            echo "Meu nome é " . self::nome . "<br>";
        }
    }

    $rodrigo = new Humano;
    //Saída: Olá mundo!
    $rodrigo->falar();
    //Saída: Meu nome é Rodrigo
    $rodrigo->dizerNome();
?>