<?php
    //in_array() -> função para verificar se um item está no array

    $arr = ['Botafogo', 'Cruzeiro', 'Flamengo', 'Fluminense', 'Grêmio'];

    //Saída: Não existe o time Fortaleza FC no array
    if(in_array("Fortaleza FC", $arr)) {
        echo "Existe o time Fortaleza FC no array <br>";
    } else {
        echo "Não existe o time Fortaleza FC no array <br>";
    }

    $time = 'Flamengo';

    //Saída: Existe o time Flamengo no array
    if(in_array($time, $arr)) {
        echo "Existe o time Flamengo no array <br>";
    } else {
        echo "Não existe o time Flamengo no array <br>";
    }
?>