<?php
    /*
        setDate => Recebe ano, mês e dia, alterando completamente a data.
 	    setTime => Recebe hora, minuto e segundo, alterando o tempo da data.
        $data = new DateTime(); é a data atual
    */
    $data = new DateTime();
    //Saída: DateTime Object ( [date] => 2024-01-19 19:17:03.240749 [timezone_type] => 3 [timezone] => Europe/Berlin ). É a data atual
    print_r($data);
    echo "<br>";

    $data->setDate(2024,9,25);
    //Saída: DateTime Object ( [date] => 2024-09-25 19:17:03.240749 [timezone_type] => 3 [timezone] => Europe/Berlin )
    print_r($data);
    echo "<br>";

    $data->setTime(5,12,10);
    //Saída: DateTime Object ( [date] => 2024-09-25 19:17:03.240749 [timezone_type] => 3 [timezone] => Europe/Berlin )
    print_r($data);
    echo "<br>";
    //Saída: 25/09/24
    echo $data->format('d/m/y') . "<br>";
?>