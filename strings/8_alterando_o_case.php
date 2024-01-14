<?php
    $str = "esta string esta em caixa alta";

    //Saída: ESTA STRING ESTA EM CAIXA ALTA
    echo strtoupper($str) . "<br>";

    $str2 = "ESTA STRING ESTA EM CAIXA BAIXA";
    //Saída: esta string esta em caixa baixa
    echo strtolower($str2);
?>