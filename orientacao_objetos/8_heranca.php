<?php
    class Humano {

        public $idade = 29;

        public function falar() {
            echo "Olá Mundo! <br>";
        }
        //Não vou conseguir invocar esse método pelas classes filhas
        private function gritar() {
            echo "O Cruzeiro é o melhor time do Brasil! <br>";
        }
        //Para acessar o método private, preciso externá-la. Método privado é o gritar(){}
        public function acessaGritar() {
            $this->gritar();
        }

        protected function falarAlto() {
            echo "FALEI ALTOOOO! <br>";
        }

        public function acessarFalarAlto() {
            $this->falarAlto();
        }

    }

    class Programador extends Humano {

        /*
            Quando o método na classe pai tiver a visibilidade protected, a classe filha acessa.
            falarAlto() está na classe Humano(Que é pai).
        */
        public function acessarFalarAltoProgramador() {
            $this->falarAlto();
        }
    }

    $h1 = new Humano;
    //Saída: Olá Mundo!
    $h1->falar();
    //Saída: O Cruzeiro é o melhor time do Brasil!
    $h1->acessaGritar();
    //Saída: FALEI ALTOOOO!
    $h1->acessarFalarAlto();

    $jose = new Programador;
    //Saída: 29
    echo $jose->idade . "<br>";
    //Saída: Olá Mundo!
    $jose->falar();
    //Saída: O Cruzeiro é o melhor time do Brasil!
    $jose->acessaGritar();
    //Saída: FALEI ALTOOOO!
    $jose->acessarFalarAlto();
    //Saída: FALEI ALTOOOO!
    $jose->acessarFalarAltoProgramador();
?>