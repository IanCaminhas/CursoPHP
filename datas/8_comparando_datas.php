<?php

    $dataA = new DateTime();
    $dataB = new DateTime();

    $dataC = new DateTime();

    $dataB->setDate(2025,12,31);
    $dataC->setDate(2025,12,31);

    $dataB->setTime(1,12,31);
    $dataC->setTime(1,12,31);

    //Saída: A data B é maior que a data A
    if($dataB > $dataA) {
        echo "A data B é maior que a data A <br>";
    }
    //Saída: A data A é maior que a data B
    if($dataA < $dataB) {
        echo "A data A é maior que a data B <br>";
    }

    /*Para isso aqui funcionar, a data e a hora precisam ser iguais
        Saída: As datas A e C são iguais */
    if($dataB == $dataC) {
        echo "As datas B e C são iguais <br>";
    }
?>