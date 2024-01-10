<?php
    echo NULL;

    $nome= NULL;

    //Saída: O valor é nulo!
    if(is_null($nome)) {
        echo "O valor é nulo!";
    }

    $nome = "Ian";

    //Sem saída no navegador
    if(is_null($nome)) {
        echo "O valor é nulo!";
    }
?>