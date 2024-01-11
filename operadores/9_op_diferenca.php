<?php 

$a = 3;
$b = 4;

//Saída: Testando diferença 1
if($a != $b) {
    echo "Testando diferença 1<br>";
}

//Saída: sem a saída no navegador
if($a != 3) {
    echo "Testando diferença 2<br>";
}

//Saída: Testando diferença 3
if(false != "teste") {
    echo "Testando diferença 3<br>";
}
/*Saída: sem saída no navegador, pois 3 é igual a "3". 
Aqui apenas os valores são comparados, os tipos não.
O próprio PHP faz um auto-casting dos tipos.
*/
if(3 != "3") {
    echo "Testando diferença 4<br>";
}

//Saída: Testando diferença 5. Aqui os valores são diferentes mesmo. Os tipos são ignorados
if(3 != "4") {
    echo "Testando diferença 5<br>";
}


?>