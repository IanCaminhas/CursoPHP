<?php 
    //Saída: 2.5
    echo 5/2;
    echo "<br>";

    //Saída: É float
    if(is_float(5/2)) {
        echo "É float <br>";
    }
    //Saída: uma string 2.3
    echo 2 . 3;
    echo "<br>";

    //Saída: É string
    if(is_string(2 . 3)) {
        echo "É string <br>";
    }

    $nome = "Ian";
    $sobrenome = "Pereira Caminhas";

    $nomeCompleto = $nome . " " .$sobrenome;

    //Saída: Ian Pereira Caminhas
    echo $nomeCompleto;
    echo "<br>";


    /*
        Utilize funções dos seguintes tipos para evitar resultados indesejados: is_float(), is_string(), is_boolean(), etc.
        Checar antes para evitar resultados indesejados.
    */


?>