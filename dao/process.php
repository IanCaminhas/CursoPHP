<?php

include_once("db.php");
include_once("dao/CarDAO.php");

//Esse arquivo vai ser acionado quando houver submissão do formulário. Vou pegar os valores dos inputs através desse process.php

/*$conn vem de include_once("config.php");
Essa variável representa a conexão com o banco de dados. 
Essa variável vai ser usada lá na classe CarDao para realizar as operações no bd */
$carDao = new CarDao($conn);

//Pegando os inputs submetidos pelo formulário
$brand = $_POST["brand"];
$km = $_POST["km"];
$color = $_POST["color"];

/*Criando o objeto com os inputs do formulário. 
Esse objeto será passado para o DAO com o objetivo de ocorrer a persistência.
*/

$newCar = new Car();

$newCar->setBrand($brand);
$newCar->setKm($km);
$newCar->setColor($color);

//Persintindo o carro com a classe Dao
$carDao->create($newCar);

//Quando finalizar a persistência, vou ser redirecionado para o index.php
header("Location: index.php");
