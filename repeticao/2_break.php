<?php
    $x = 0;
    echo "Sem uso do break <br>";
    /* Saída
        Sem uso do break
        O X é 0
        O X é 1
        O X é 2
        O X é 3
        O X é 4
        O X é 5
        O X é 6
        O X é 7
        O X é 8
        O X é 9
    */
    while ($x < 10) {
        echo "O X é $x <br>";
        $x++;
    }

    $y = 0;
    echo "Com uso do break <br>";
    /*Saída
       Com uso do break
       O X é 0
       O X é 1
       O X é 2
       O X é 3
       O X é 4
       O X é 5
    */
    while ($y < 10) {
        echo "O X é $y <br>";

        if($y === 5) {
            echo "Terminando o loop <br>";
            break;
        }

        $y++;
    }

?>