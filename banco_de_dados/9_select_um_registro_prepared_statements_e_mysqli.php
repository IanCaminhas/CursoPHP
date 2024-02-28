<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// Esse id = 4 veio do formulário(apenas uma simulação)
$id = 7;
$stmt = $conn->prepare("SELECT * FROM itens WHERE id = ?");

// "i" porque preciso receber um int
$stmt->bind_param("i", $id);
$stmt->execute();

//Aqui estou capturando o resultado da consulta
$result = $stmt->get_result();

//Estou pegando uma única linha do banco de dados
$item = $result->fetch_row();

//Resultado: Array ( [0] => 7 [1] => Disco novo [2] => Disco para bicicleta KSW )
print_r($item);

?>