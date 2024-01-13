<?php
    function soma($a, $b) {
        /*Os argumentos passados para essa função:
            Saída: Array ( [0] => 2 [1] => 4 )
        */

        echo "<br>";

        print_r(func_get_args());
        /*O número de argumentos passados para a função:
            Saída: 7
        */

        echo "<br>";

        print_r(func_num_args());
        return $a + $b;
    }

    soma(2, 4);
?>