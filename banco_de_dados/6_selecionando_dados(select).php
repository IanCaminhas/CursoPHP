<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  $q = "SELECT * FROM itens";

  $result = $conn->query($q);

  $conn->close();

  // UM RESULTADO. Geralmente, retorna o primeiro resultado
  $item = $result->fetch_assoc();

  // Retorna todos os resultados
  $itens = $result->fetch_all();

  print_r($itens);

  ?>