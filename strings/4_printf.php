<?php
    $nome = "Ian";

    /*%s significa uma string
    saída: O nome é Ian */
    printf("O nome é %s <br>", $nome);

    $n = 10;

    /*%d significa uma inteiro
    saída: O nome é 10 e o outro é 150 */
    printf("O nome é %d e o outro é %d <br>", $n, 150);

    /*%d significa uma float
    .2 significa para gerar um float com duas casas decimais.
    saída: A temperatura atual é 12.58 */
    printf("A temperatura atual é %.2f <br>", 12.58)
?>