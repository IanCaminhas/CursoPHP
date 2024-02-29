<?php

    $host = "localhost";
    $db = "cursophp";
    $user = "root";
    $password = "";
    //banco de dados(mysql ? SQLite ?), host, nome do banco, usuário e senha;
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);

?>