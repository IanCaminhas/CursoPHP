<?php

    echo "Testando a concatenação";
    echo "<br>";
    echo "testando" . " a " . "concatenação";
    echo "<br>";
    $t = "testando";
    $c = "concatenação";
    //Saída: testando a concatenação
    echo $t . " a " .$c;

    echo "<br>";
    $marca = "Ferrari";
    $motor = "3.0";
    $vel_max = 200;
    //Saída: O carro da Ferrari tem um motor 3.0 e chega numa velocidade de 200 km/h
    echo "O carro da " . $marca . " tem um motor " . $motor . " e chega numa velocidade de " . $vel_max . " " . "km/h";


?>