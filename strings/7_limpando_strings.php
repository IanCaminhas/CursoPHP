<?php
    $str1 = "   Ian   ";

    /* Saída:
        Esta é a string 1: Ian .
        Pela saída, o PHP ainda deixa um espaço pequeno espaço em branco. Perceba ente o n e o ponto.
        Por mais que o HTML corte, todo esse espaço em branco é persistido no BD.
    */
    echo "Esta é a string 1: $str1. <br>";

    $str1Limpa = trim($str1);

    /* Saída:
       Esta é a string 1: Ian.
       Pela saída, não existe mais o pequeno espaço em branco entre o n e o ponto.
    */
    echo "Esta é a string 1: $str1Limpa. <br>";
?>