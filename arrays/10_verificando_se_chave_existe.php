<?php
    /*  
        Para verificar se a chave do array associativo existe, posso usar
        o isset() ou array_key_exists().

        isset() também funciona para variáveis!!!
        Usando isset() para variáveis, eu vou saber se a variável foi declarada ou não!!!
    */
    $arr = [
        'nome' => 'Ian',
        'idade' => 29
    ];

    /*Verificando se chave existe
        Saída: A chave existe!  
    */
    if(array_key_exists("nome" , $arr)) {
        echo "A chave existe! <br>";
    } else {
        echo "A chave não existe! <br>";
    }

    /*Verificando se chave existe
        Saída: A chave não existe! 
    */
    if(array_key_exists("profissao" , $arr)) {
        echo "A chave existe! <br>";
    } else {
        echo "A chave não existe! <br>";
    }

     /*Verificando se chave existe com isset
        Saída: A chave existe! ISSET 
    */
    if(isset($arr['nome'])) {
        echo "A chave existe! ISSET <br>";
    } else {
        echo "A chave não existe! ISSET <br>";
    }

    //Saída: A chave não existe! ISSET
    if(isset($arr['profissao'])) {
        echo "A chave existe! ISSET <br>";
    } else {
        echo "A chave não existe! ISSET <br>";
    }

    /*
        isset() para variáveis
        Saída: A variável não existe! ISSET
    */

    if(isset($x)) {
        echo "A variável existe! ISSET <br>";
    } else {
        echo "A variável não existe! ISSET <br>";
    }

    $x = 10;
    //Saída: A variável existe! ISSET
    if(isset($x)) {
        echo "A variável existe! ISSET <br>";
    } else {
        echo "A variável não existe! ISSET <br>";
    }
?>