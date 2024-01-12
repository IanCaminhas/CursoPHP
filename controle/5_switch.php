<?php
    /*
        Se eu não colocar o break, todos os cases serão executados. O PHP permite.
        Como desejo executar ações de uma condição específica, preciso colocar o break. 
        Como o default é o último, não preciso colocar o breack.
    */

    $x = 0;
    //Saída: x é igual a 0
    switch($x) {

        case 0:
            echo "x é igual a 0<br>" ;
            break;
        case 1:
            echo "x é igual a 1 <br>";
            break;
        default:
            echo "x não é igual a nenhum dos valores mencionados <br>";
    }

    
    $y = 5;
    //Saída: y não é igual a nenhum dos valores mencionados
    switch($y) {

        case 0:
            echo "y é igual a 0<br>" ;
            break;
        case 1:
            echo "y é igual a 1 <br>";
            break;
        default:
            echo "y não é igual a nenhum dos valores mencionados <br>";
    }

    $w = "Ian";
    //Saída: O nome é Ian
    switch($w) {

        case "José":
            echo "O nome é José<br>" ;
            break;
        case "Ian":
            echo "O nome é Ian<br>";
            break;
        default:
            echo "O nome não foi encontrado<br>";
    }
?>