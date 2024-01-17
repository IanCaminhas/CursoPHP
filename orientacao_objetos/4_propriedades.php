<?php

    class Car {
        public $rodas = 4;
        public $aro = 20;
        public $cor = "Vermelha";
        //Não sou obrigado a inicializar a propriedade. Posso iniciar após a instanciação do objeto
        public $motor;

        function ligar() {
            echo "Vrummmm <br>";
        }
    }

    $fiatUno = new Car;

    //Saída: 4
    echo $fiatUno->aro . "<br>";
    //Saída: 20
    echo $fiatUno->rodas . "<br>";

    $fiatUno->cor = "Rosa";
    //Saída: Rosa
    echo $fiatUno->cor;
    //Saída: Vrummmm
    $fiatUno->ligar();

    //Saída: sem saída no navegador, pois a propriedade não estava inicializada
    echo $fiatUno->motor . "<br>";
    $fiatUno->motor = 1.0;
    //Saída: 1... Depois que inicializei a propriedade
    echo $fiatUno->motor;

?>