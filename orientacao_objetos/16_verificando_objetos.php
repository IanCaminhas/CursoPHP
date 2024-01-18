<?php

    class Humano {
        public function falar() {
            echo "Olá";
        }
    }

    $messi = new Humano;

    $teste = 10;

    //Saída: É um objeto
    if(is_object($messi)) {
        echo "É um objeto <br>";
    } else {
        echo "Não é um objeto <br>";
    }

    //Saída: Não é um objeto
    if(is_object($teste)) {
        echo "É um objeto <br>";
    } else {
        echo "Não é um objeto <br>";
    }

    //Qual a classe desse objeto ? Saída: Humano
    echo get_class($messi) . "<br>";
    //Existe o método falar ? Saída: Método existe
    if(method_exists($messi, "falar")) {
        echo "Método existe <br>";
    } else {
        echo "Método não existe <br>";
    }
    //Existe o método falar ? Saída: Método não existe
    if(method_exists($messi, "asd")) {
        echo "Método existe <br>";
    } else {
        echo "Método não existe <br>";
    }
?>
