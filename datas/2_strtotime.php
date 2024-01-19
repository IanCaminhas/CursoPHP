<?php
    $cincoDias = strtotime("5 days");
    /*Saída: 1706106215. Isso é a representação de 5 dias para o PHP. 
    Com esse valor, consigo agregar cinco dias na data atual.
    Isso não é um valor aleatório. Isso é chamado de unique timestemp.
    O PHP usa uma data base para calcular esse unique timestemp. 
    A data base sempre olha o tempo corrente.
    Portanto, o unique timestemp é variável.
    Em resumo: aqui tem 5 dias da minha data base. Esse raciocínio vale para meses, anos segundos também
    */
    echo $cincoDias . "<br>";

   //Saída: 1706538516
    $dezDias = strtotime("10 days");
    echo $dezDias . "<br>";

    $dataAtualMais5 = date('d/m/y', $cincoDias);
    //Saída: 24/01/24. Data atual: 19/01/2024
    echo $dataAtualMais5 ."<br>";

    $dataAtualMais10 = date('d/m/y', $dezDias);
    //Saída: 29/01/24. Data atual: 19/01/2024
    echo $dataAtualMais10 ."<br>";

    $doisMeses = strtotime("2 months");
    $dataAtualMaisDoisMeses = date('d/m/y', $doisMeses);
    //Saída: 19/03/24
    echo $dataAtualMaisDoisMeses ."<br>";

    $dozeAnos = strtotime("12 years");
    $dataAtualMaisDozeAnos = date('d/m/y', $dozeAnos);
   //Saída: 19/01/36
    echo $dataAtualMaisDozeAnos ."<br>";
?>