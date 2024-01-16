<?php
    $marca = "Fiat Toro";
    $motor = "1.0";
    $tetoSolar = true;
    $portas = 4;

    /*Essas strings são as variáveis definidas acima. 
        Se eu incluir uma variável não declarada, um warning será exibido. Por exemplo(colocando "teste", uma variável que não existe)
        $carro = compact("marca", "motor", "tetoSolar", "portas", "teste");
        Saída: Warning: compact(): Undefined variable $teste
    */

    $carro = compact("marca", "motor", "tetoSolar", "portas", "teste");
    /* Saída:
        Array ( [marca] => Fiat Toro [motor] => 1.0 [tetoSolar] => 1 [portas] => 4 ).
        Cada variável com seu respectivo valor se tornou uma par de chave/valor
    */
    print_r($carro);
?>