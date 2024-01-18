<?php
    trait Objeto {
        public $y = 10;
        public function teste() {
            echo "Testando trait de objeto <br>";
        }
    }

    trait Testando {

        public function traitTeste() {
            echo "Este método é da trait Testando <br>";
        }
    }

    class Central {
        //Posso usar diversas traits
        use Objeto;
        use Testando;
    }

    $x = new central;
    //Saída: Testando trait de objeto
    $x->teste();
    //Saída: Este método é da trait Testando
    $x->traitTeste();
    //Saída: 10
    echo $x->y . "<br>";
?>