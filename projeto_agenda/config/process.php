<?php

    /* Esse arquivo tem a função de realizar o processamento de dados, ou seja, 
    faz todo o trabalho com o banco: insert, update, select e delete */

    // Aqui estou iniciando a sessão. Vou ter mensagem por sessão!!!
    session_start();

    include_once("connection.php");
    include_once("url.php");

    $data = $_POST;

    //Eu tenho dados no POST passados via form ?
    if(!empty(($data))){
        // Esse if é para modificações no banco

        /*print_r($data); exit;
        Somente para conferir o que está vindo do formulário. O exit; é para parar o programa.
        Saída: Array ( [type] => create [name] => dfg [phone] => 65464 [observations] => hnhb )
        Se for bem sucedido, quer dizer que os dados estão sendo capturados.
        */

        //Criar contato
        if($data['type'] === 'create') {

            //echo "CRIAR DADO"; pra ver se está chegando nesse if

            $name = $data["name"];
            $phone = $data["phone"];
            $observations = $data["observations"];

            $query = "INSERT INTO contacts (name, phone, observations) VALUES (:name, :phone, :observations)";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":observations", $observations);

            try {
                $stmt->execute();
                $_SESSION["msg"] = "Contato criado com sucesso!";


            }catch(PDOException $e) {
                //erro na conexão
                $error = $e->getMessage();
                echo "Erro: $error";
            }

        } else if($data["type"] === "edit") {
            $name = $data["name"];
            $phone = $data["phone"];
            $observations = $data["observations"];
            // O input do tipo hidden é quem vai trazer o id. Esse input id aparece quando submetemos o formulário
            $id = $data["id"];

            $query = "UPDATE contacts SET name = :name, phone = :phone, observations  = :observations WHERE id = :id";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":observations", $observations);
            $stmt->bindParam(":id", $id);

            try {
                $stmt->execute();
                $_SESSION["msg"] = "Contato atualizado com sucesso!";
            }catch(PDOException $e) {
                //erro na conexão
                $error = $e->getMessage();
                echo "Erro: $error";
            }

        } else if($data["type"] === "delete") {

            $id = $data["id"];

            $query = "DELETE FROM contacts WHERE id = :id";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":id", $id);

            try {
                $stmt->execute();
                $_SESSION["msg"] = "Contato removido com sucesso!";
            } catch(PDOException $e) {
                //erro na conexão
                $error = $e->getMessage();
                echo "Erro: $error";
            }
        } 

        //REDIRECT HOME. Quando termino uma operação, vou ser redirecionado para a página de index.php
        header("Location:" . $BASE_URL . "/../index.php");


    } else {
        // Esse else é para seleção de dados

        $id;
        // Se o atributo id da variável global $_GET estiver preenchido, a variável $id receberá o valor de $_GET["id"]
        if(!empty($_GET)) {
            $id = $_GET["id"];
        }
    
        //Retorna o dado de um contato
        if(!empty($id)){
    
            $query = "SELECT * FROM contacts WHERE id = :id";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            $contact = $stmt->fetch();
    
        } else {
            //Retorna todos os contatos
            $contacts = [];
            $query = "SELECT * FROM contacts";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $contacts = $stmt->fetchAll();
        }
    }


    /*Fechando conexão com PDO. Não existe um método close() para 
    fechar a conexão com o banco de dados através do PDO.
    O fechamento ocorre na força bruta mesmo, fazendo $conn = null
    */
    $conn = null;

?>