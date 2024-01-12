<?php
    //Opbjeto é usar os recursos que estão no arquivo teste.php
    //Consegui usar o valor da variável $c que está em teste.php
    //Além disso, o <h1> que estava nesse arquivo será exibido
    include "teste.php";

?>

<p>Após o include</p>
<p>Imprimindo c <?php echo $c; ?></p>
