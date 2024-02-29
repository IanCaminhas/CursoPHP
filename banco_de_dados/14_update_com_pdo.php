<?php

    $host = "localhost";
    $db = "cursophp";
    $user = "root";
    $password = "";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);

    //Simulando que esses dados vieram de um formulário via POST
    $id = 10;
    $nome = "Apple iPhone 15 Pro Max";
    $descricao = "(256 GB) — Titânio Azul";

    $stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id ");

    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":descricao", $descricao);

    $stmt->execute();

?>