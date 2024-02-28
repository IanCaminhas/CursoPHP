<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

//Supondo que esses dados vieram do formulário
$nome = "Suporte de microfone";
$descricao = "O suporte é novo e foi comprado na China";

//(?,?) => são os bind_params, ou seja, são os valores que seriam colocados na query
$stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?,?)");

/* 
$nome, $descricao são os valores que vou substituir no bind_params. 
Esses valores podem ser advindos do post do formulário.
"ss" são os tipos dos parâmetros. 
s é a string para o parâmetro $nome, o outro s é para o parâmetro descricao.
"ss" acaba sendo uma validação antes de persistir os dados
*/
$stmt->bind_param("ss", $nome, $descricao); //s = string, i = integer, d = double
//Aqui vai persistir o dado no banco
$stmt->execute();

?>