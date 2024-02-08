<?php

    /*Isso aqui é um mock, ou seja, estou simulando dados que vem do Banco do Dados.
    Aí não preciso fazer estrutura de banco de dados, fazer conexão, etc. */
    $usuario = [
        'nome' => 'Ian',
        'idade' => 29,
        'profissao' => 'Estudante'
    ];

    if($usuario) {
        $nome = $usuario['nome'];
        $idade = $usuario['idade'];
        $profissao = $usuario['profissao'];
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <!-- Deixando a action como string vazia, a página vai auto carregar  -->
       <form action="">
        <div>
            <input type="text" name="nome" placeholder="Digite seu nome" value=<?= $nome ?>>
        </div>
        <div>
            <input type="text" name="nome" placeholder="Digite sua idade" value=<?= $idade ?>>
        </div>
        <div>
            <input type="text" name="nome" placeholder="Digite sua profissão" value=<?= $profissao ?>>
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
       </form>
    </body>
</html>
