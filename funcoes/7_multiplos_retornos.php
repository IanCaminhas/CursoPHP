<?php
    function alteraDados($nome, $idade) {

        $nome = "Sr . $nome";
        $idade = "$idade anos";

        return [$nome, $idade];
    }

    $dados = alteraDados("Ian", 29);
    //saída: Array ( [0] => Sr . ian [1] => 29 anos )
    print_r($dados);
    
    echo "<br>";
    //Olá Sr . Ian, você tem 29 anos
    echo "Olá $dados[0], você tem $dados[1]"
?>