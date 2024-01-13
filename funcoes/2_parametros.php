<?php

    //$vel é parâmetro
    function velocidadeMaxima($vel) {

        //preciso fazer a vereificação, pois posso passar uma string ao invés de um valor numérico.
        if(is_int($vel)) {
            echo "O carro atinge a velocidade máxima de $vel km/h <br>";
        } else {
            echo "Por favor, passe um número inteiro <br>";
        }
       
    }

    //Saída: O carro atinge a velocidade máxima de 200 km/h
    velocidadeMaxima(200);
    //Saída: O carro atinge a velocidade máxima de 300 km/h
    velocidadeMaxima(300);
    //Saída: O carro atinge a velocidade máxima de 400 km/h
    velocidadeMaxima(400);

    echo "Teste continuando <br>";

    $velocidade = 150;

    //Saída: O carro atinge a velocidade máxima de 150 km/h
    //O parâmetro "teste"(desnecessário) é ignorado. Nem sequer um warning é emitido
    velocidadeMaxima($velocidade,"teste");
    //Saída: Por favor, passe um número inteiro
    velocidadeMaxima("teste");

    function descreverAnimal($nome, $raca) {
        echo "O $nome é da raça $raca <br>";
    }

    //Saída: O Bob é da raça Vira lata
    descreverAnimal("Bob", "Vira lata");
    //Saída: O Shark é da raça Pastor Alemão
    descreverAnimal("Shark", "Pastor Alemão");

    /*  Se eu passar apenas um parâmetro, um fatal error é emitido!
        descreverAnimal("Poodle");
    */
?>