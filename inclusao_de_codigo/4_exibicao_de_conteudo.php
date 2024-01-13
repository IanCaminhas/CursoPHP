<?php

    $nome = "Ian";
    $sobrenome = "Caminhas";

?>

<?php 
/*Saída: xyz. Não é recomendado usar dessa maneira, ou seja, usando para lógica de PHP.
Uso para recomendado apenas para exibição de conteúdo.
*/
?>
<?= $teste = "xyz"; ?>

<form action="">
    <div>
        <input type ="text" value="<?= $nome; ?>">
    </div>
    <div>
        <input type ="text" value="<?= $sobrenome; ?>">
    </div>
    <div>
        <input type ="submit" value="Enviar">
    </div>
</form>