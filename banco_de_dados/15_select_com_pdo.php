<?php

    $host = "localhost";
    $db = "cursophp";
    $user = "root";
    $password = "";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);

    //É como se viesse do formulário via POST
    $id = 5;

    $stmt = $conn->prepare("SELECT * FROM itens WHERE id > :id");

    $stmt->bindParam(":id", $id);

    $stmt->execute();

    /* 
        Fazendo com PDO::FETCH_ASSOC, a impressão dos valores serão resumidos 
        em relação ao uso de $stmt->fetch();

        Saída com $stmt->fetch();
        Array ( [id] => 6 [0] => 6 [nome] => Microfone [1] => Microfone [descricao] => Microfone sem marca muito barato [2] => Microfone sem marca muito barato)

        Saída com $stmt->fetch(PDO::FETCH_ASSOC);
        Array ( [id] => 7 [nome] => Disco novo [descricao] => Disco para bicicleta KSW )
    */

    //recebe apenas a primeira ocorrência
    $data = $stmt->fetch();
    //Saída: Array ( [id] => 6 [0] => 6 [nome] => Microfone [1] => Microfone [descricao] => Microfone sem marca muito barato [2] => Microfone sem marca muito barato)
    print_r($data);

    echo "<br>";
    echo "<br>";

    $data2 = $stmt->fetch(PDO::FETCH_ASSOC);
    //Saída: Array ( [id] => 7 [nome] => Disco novo [descricao] => Disco para bicicleta KSW )
    print_r($data2);

    echo "<br>";
    echo "<br>";

    //Recebe todos os dados
    $itens = $stmt->fetchAll();
    print_r($itens);

    echo "<br>";
    echo "<br>";

    $itens2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
    print_r($itens2);

?>