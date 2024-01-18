<?php
    class Humano {

    }

    class Animal {

    }

    class Medico extends Humano {

    }

    $haaland = new Humano;
    $tucano = new Animal;

    //Saída: Haaland é um humano
    if($haaland instanceof Humano) {
        echo "Haaland é um humano <br>";
    } else {
        echo "Haaland não é um humano <br>";
    }

    //Saída: Tucano não é um humano
    if($tucano instanceof Humano) {
        echo "Tucano é um animal <br>";
    } else {
        echo "Tucano não é um humano <br>";
    }

    $calango = new medico;

    //Saída: Calango é um médico
    if($calango instanceof Medico) {
        echo "Calango é um médico <br>";
    } else {
        echo "Calango não é um médico <br>";
    }

    /*Saída: Calango é um humano. Como a classe Medico herda de Humano,
    $calango também é um Humano.
    */
    if($calango instanceof Humano) {
        echo "Calango é um humano <br>";
    } else {
        echo "Calango não é um humano <br>";
    }

    //Saída: Tucano não é um médico
    if($tucano instanceof Medico) {
        echo "Tucano é um médico <br>";
    } else {
        echo "Tucano não é um médico <br>";
    }
?>