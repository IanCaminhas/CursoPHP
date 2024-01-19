<?php
    $d = date('d/m/y'); // day / month / year
    //Rertorna a data atual no formato: 19/01/24
    echo $d . "<br>";

    $d2 = date('d, M - Y');
    //Saída: 19, Jan - 2024
    echo $d2 . "<br>";

    //Colocando y(year) maiúsculo, sai o nome completo(sai 2024 e não 24, por exemplo)
    $d3 = date('d/m/Y');
    //Saída: 19/01/2024
    echo $d3 ."<br>";

    // l retorna o dia da semana ao invés do dia em número
    $d4 = date('l, M - Y');
    //Saída: Friday, Jan - 2024.
    echo $d4 . "<br>";
?>