<?php

    $dataA = new DateTime();
    $dataB = new DateTime();

    $dataB->setDate(2001, 10, 15);

    //Saída: DateTime Object ( [date] => 2024-01-19 19:33:14.150627 [timezone_type] => 3 [timezone] => Europe/Berlin )
    print_r($dataA);
    echo "<br>";
    //Saída: DateTime Object ( [date] => 2001-10-15 19:33:14.150632 [timezone_type] => 3 [timezone] => Europe/Berlin )
    print_r($dataB);
    echo "<br>";

    $diferenca = $dataA->diff($dataB);
    //Saída: DateInterval Object ( [y] => 22 [m] => 3 [d] => 4 [h] => -1 [i] => 59 [s] => 59 [f] => 0.999995 [weekday] => 0 [weekday_behavior] => 0 [first_last_day_of] => 0 [invert] => 1 [days] => 8131 [special_type] => 0 [special_amount] => 0 [have_weekday_relative] => 0 [have_special_relative] => 0 ) 
    print_r($diferenca);
    echo "<br>";
    //Saída: 8131 days. Refere-se à diferença entre a data A e a data B.
    echo $diferenca->format("%a days");
    echo "<br>";

?>