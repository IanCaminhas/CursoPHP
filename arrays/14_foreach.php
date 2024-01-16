<?php

    $dadosIan = [
        'nome' => 'Ian',
        'idade' => 29,
        "profissao" => 'Estudante'
    ];

    $dadosHeleno = [
        'nome' => 'Heleno',
        'idade' => 57,
        "profissao" => 'Empresário'
    ];

    /* Saída:
        nome => Ian
        idade => 29
        profissao => Estudante
    */
    foreach($dadosIan as $carac => $value) {
        echo "$carac => $value <br>";
    }

    echo "<br>";

    /* Saída:
        nome => Heleno
        idade => 57
        profissao => Empresário
    */
    foreach($dadosHeleno as $carac => $value) {
        echo "$carac => $value <br>";
    }
    
    echo "<br>";

    //Se eu fizer no formato abaixo, só vou extrair os valores
    /* Saída:
        Heleno
        57
        Empresário
    */
    foreach($dadosHeleno as $value) {
        echo "$value <br>";
    }

?>