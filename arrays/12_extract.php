<?php

    //Ao usar extract, estou criando várias variáveis com as chaves do array associativo.

    $arr = [
        'cor' => 'vermelho',
        'forma' => 'retângular',
        'material' => 'aço'
    ];

    extract($arr);
    /*
        1 - Com a função extract, criamos variáveis rapidamente de arrays associativos.
        2 - O nome da chave é o nome da variável.
    */
    //Saída: vermelho
    echo "$cor <br>";
    //Saída: retângular
    echo "$forma <br>";
    //Saída: aço
    echo "$material <br>";

    $nome = "Ian";

    $pessoa = [
        'nome' => 'Lionel Messi',
        'idade' => 30
    ];
    //Saída: Ian
    echo "$nome <br>";

    extract($pessoa);
    /*Saída: Lionel Messi...
     $nome = "Ian" foi sobrescrita pela chave do array associativo 'nome' => 'Lionel Messi'*/
    echo "$nome <br>";
    //Saída: 30
    echo "$idade <br>";

?>