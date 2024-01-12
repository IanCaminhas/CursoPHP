<?php
    /* Saídas:
       Entrou no primeiro if 1
       Entrou no segundo if 1
    */
    if(10 > 2) {
        
        echo "Entrou no primeiro if 1<br>";

        if ("teste" == "teste") {
            echo "Entrou no segundo if 1<br>";
        }
    }

    //Saída: Entrou no primeiro else 2
    if(10 < 2) {
        
        echo "Entrou no primeiro if 2<br>";

        if ("teste" != "teste") {

            echo "Entrou no segundo if 2<br>";

        } else {
            
            echo "Entrou no segundo else 2<br>";
        }
    } else {
        
       echo "Entrou no primeiro else 2<br>";
    }

    $escopo1 = 10;

    /* Saídas:
       Entrou no primeiro if 3
       Entrou no segundo if 3
       10
       20 

       Como o escopo é global, o valor 10(var $escopo1) vai ser exibido em qualquer nível de if.
       Em relação a:  $escopo2 = 20; 
       Essa variável está no escopo global também. Ela vai constar em todos os níveis do if
    */

    if(10 > 2) {
        
        echo "Entrou no primeiro if 3<br>";
        $escopo2 = 20; 

        if ("teste" == "teste") {

            echo "Entrou no segundo if 3<br>";
            echo $escopo1;
            echo "<br>";
            echo $escopo2;

        } else {
            
            echo "Entrou no segundo else 3<br>";
            
        }
    } else {
        
       echo "Entrou no primeiro else 3<br>";

    }
?>