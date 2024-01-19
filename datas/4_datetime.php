<?php
    //Por padrão, o objeto pega a data atual
    $data = new DateTime();
     /*
    Não consigo acessar o objeto via atributo ou array associativo.

    echo $data->date; erro gerado: Warning: Undefined property: DateTime::$date in
    echo $data['date']; erro gerado: Fatal error: Uncaught Error: Cannot use object of type DateTime as array in
    */

    //Saída: DateTime Object ( [date] => 2024-01-19 16:26:43.519692 [timezone_type] => 3 [timezone] => Europe/Berlin )
    print_r($data);
    echo "<br>";
?>