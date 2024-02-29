<?php

    $host = "localhost";
    $db = "cursophp";
    $user = "root";
    $password = "";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);

    /*
    Ao invés das interrogações usadas no mysqli, posso usar como placeholders: :nome e :descricao.
    O PDO aceita esse formato. É mais intuitivo. É mais próximo com o valor da query. Outra explicação:

    A variável $statement será a responsável por preparar a query SQL que será executada no BD.
    Dois parâmetros foram criados nessa query: :nome e :descricao. 
    Vamos definir o valor desses parâmetros usando o método bindParam():

    */
    $stmt = $conn->prepare("INSERT INTO itens (nome,descricao) VALUES (:nome, :descricao)");

    /* É um requisito do PDO passar os parâmetros por referência e não a string literal.
    Exemplo com string literal:
        $stmt->bindParam(":nome", "Celular Xiaomi"); "Celular Xiaomi" é uma string literal.
    
    Passando os parâmetros por referência, posso até tratá-los.
    */

    //É como esses dois dados tivessem vindos de um fomulário POST
    $nome = "Celular Xiaomi";
    $descricao = "12 4G 256GB - 8GB Ram (Versao Global)";

    //:nome e :descricao devem ser iguais aos placeholders de $stmt
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":descricao", $descricao);

    /* 
    O método execute() será o responsável por de fato executar a query SQL com os parâmetros no Banco de Dados
    */
    $stmt->execute();

?>