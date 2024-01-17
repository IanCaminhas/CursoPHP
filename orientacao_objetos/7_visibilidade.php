<?php

    class Car {
        public $rodas = 4;
        private $vidro = "Sem película";
        protected $portas = 4;

        public function getVidro() {
            return $this->vidro;
        }

        public function getPortas() {
            return $this->portas;
        }

    }

    class Mecanico {

        public function alterarRodas($carro) {
            $carro->rodas = 10;
        }

        public function colocarPelicula($carro, $pelicula) {
            $carro->vidro = $pelicula;
        }
    }


    $carro = new Car;
    //Saída: 4
    echo $carro->rodas . "<br>";

    $m1 = new Mecanico;

    $m1->alterarRodas($carro);

    //Saída: 10
    echo $carro->rodas . "<br>";
    //Saída: Sem película
    echo $carro->getVidro() . "<br>";
    //Saída: 4
    echo $carro->getPortas() . "<br>";

?>