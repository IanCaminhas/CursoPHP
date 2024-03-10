<?php
    //Estou importando os arquivos necessários para o index funcionar 
    include_once("config/url.php");
    include_once("config/process.php");

    /* limpa a mensagem de sessão */
    if(isset($_SESSION['msg'])) {
        //Essa $printMsg é para ser inserida lá no HTML
        $printMsg = $_SESSION['msg'];
        /*Aqui estou limpando a mensagem de sessão. Assim, quando recarregar a página,
        não terei a mensagem dessa sessão. Não faz mais sentido eu ter essa variável preenchida. 
        Por quê ? só faz sentido quando totaliza algo, deleta, insere ...ou seja... em algumas partes
        */
        $_SESSION['msg'] = '';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
    <!-- BOOTSTRAP CDN 
        Tive que usar a versão 4 do boostratp, pois alguns recursos do curso só funcionou com essa versão do bootstrap
    -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="<?= $BASE_URL ?>/index.php">
                <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Agenda" />
            </a>
            <div>
                <div class="navbar-nav">
                    <a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>/index.php">Agenda</a>
                    <a class="nav-link active" href="<?= $BASE_URL ?>/create.php">Adicionar Contato</a>
                </div>
            </div>
        </nav>
    </header>