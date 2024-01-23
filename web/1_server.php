<?php

    //Acessando o server
    print_r($_SERVER);

    echo "<br>";

    /*Posso acessar qualquer chave da variável global SERVER. 
        São os caminhos dos aruivos binários do 'MYSQL_HOME'.
        Saída: \xampp\mysql\bin
    */
    echo $_SERVER['MYSQL_HOME'] . "<br>";

    //Saída: Está acessando o localhost
    if($_SERVER['SERVER_NAME'] == 'localhost') {
        echo "Está acessando o localhost <br>";
    }
?>