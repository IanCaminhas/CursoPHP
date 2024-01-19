<?php
    //Data da aula: 19/01/2024

    //data atual
    $data = new DateTime();
  
    //Saída: 19/01/24. Significa a data atual
    echo $data->format('d/m/y') . "<br>";
    //Saída: Fri - Jan - 2024. Significa a data atual
    echo $data->format('D - M - Y') . "<br>";
    //Saída: Friday . January . 2024. Significa a data atual
    echo $data->format('l . F . Y') . "<br>";
    
    //data atual + 5 dias
    $data->modify('+5 days');
    //Saída: 24/01/24. Data atual mais 5 dias
    echo $data->format('d/m/y') . "<br>";
   
    //data atual + 2 meses
    $data->modify('+2 months');
    //Saída: 24/03/24, ou seja, a data atual mais 2 meses
    echo $data->format('d/m/y') . "<br>";

    //data atual - 3 anos
    $data->modify('-3 years');
    //Saída: 24/03/21, ou seja, a data atual menos 3 anos
    echo $data->format('d/m/y') . "<br>";
?>