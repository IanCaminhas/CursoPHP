<?php
    /*Por padrão, a o timezone é de Berlin:
        DateTime Object ( [date] => 2024-01-19 19:56:18.321708 [timezone_type] => 3 [timezone] => Europe/Berlin )
    */

    /*Agora estou settando a timezone. Se eu apagar essa instrução,
    a timezone retorna para Europe/Berlin
    */
    date_default_timezone_set('America/Sao_Paulo');

    $data = new DateTime();

   //Saída: DateTime Object ( [date] => 2024-01-19 15:58:34.064135 [timezone_type] => 3 [timezone] => America/Sao_Paulo )
    print_r($data);
    echo "<br>";

?>