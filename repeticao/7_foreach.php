<?php

    //Estrutura foreach é orientada a array!!!!!

    $nomes = ["Ian", "José", "Maria", "João"];

    $a = 10;

    /*
        O nome do índice atual é Ian
        Opa
        O nome do índice atual é José
        O nome do índice atual é Maria
        O nome do índice atual é João
    */
    foreach($nomes as $nome) {
        echo "O nome do índice atual é $nome <br>";

        if($nome == "Ian") {
            echo "Opa $a <br>";
        }
    }

?>