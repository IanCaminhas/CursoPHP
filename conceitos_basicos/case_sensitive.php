<?php
    //Não é case sensitive
    echo "teste <br>";
    eChO "testando 2 <br>";
    ECHO "testando 3 <br>";

   //É case sensitive
   $nome= "Matheus"; 
   echo $nome;
   echo "<br>";
   //Isso aqui vai dar erro, pois $NOME não foi definido. Ademais: $NOME != $nome
   echo $NOME;

?>