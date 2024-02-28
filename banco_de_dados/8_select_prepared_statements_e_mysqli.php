<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// Esse id = 4 veio do banco
$id = 4;
$stmt = $conn->prepare("SELECT * FROM itens WHERE id > ?");

// "i" porque preciso receber um int
$stmt->bind_param("i", $id);
$stmt->execute();

//Aqui estou capturando o resultado da consulta
$result = $stmt->get_result();

//Estou pegando os dados no formato de array
$data = $result->fetch_all();

print_r($data);

?>