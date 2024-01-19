<?php
    /*Hora e ano do nascimento.
      Ordem: hora,minuto,segundo,mês,dia,ano. 
      Essa função não aceita um zero na frente. 08, 07,02 não aceitam.
      */
     $dataNascimento = mktime(14, 20, 5, 9, 25, 1994);
    //Saída: 780499205
    echo $dataNascimento . "<br>";
    //Estou passando para date criar a data no formato dd/mm/aaaa com base na data criada pelo mktime
    $dataNascimentoFormatada = date('d/m/y', $dataNascimento);
    //saída: 25/09/94
    echo $dataNascimentoFormatada . "<br>";

    $dataEspecifica = mktime(10, 20, 11, 4, 28, 2041);
    $dataFuturaFormatada = date('m/d/y', $dataEspecifica);
    //Saída: 04/28/41
    echo $dataFuturaFormatada . "<br>";
?>