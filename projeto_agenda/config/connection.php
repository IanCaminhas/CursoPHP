<?php
/*A ideia aqui é isolar a conexão em um lugar apenas, ou seja, 
apenas num arquivo. Essa conexão é com o banco de dados */

/* Para testar se a conexão deu certo, basta dar um f5 na página. 
Se nenhum erro foi exibido, quer dizer que a conexão foi bem sucedida. 
include_once("config/connection.php"); também deve ser declarado. Se pagar, poderá ser apagado.
Eu declarei em header.php
*/

/* Outra forma de teste:
    Desligo o servidor mysql do xampp. A variável $error(está dentro do catch) será exibida
*/

$host = "localhost";
$dbname = "agenda";
$user = "root";
$pass = "";

try {

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass); 

    // Ativar o modo de erros
    /* Vai parar o software e exibir o erro, caso algum problema aconteça nas chamadas de banco. 
        Não vai ser nada silencioso, ou seja, vai servir para entender onde está ocorrendo o problema.
    */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e) {
    //erro na conexão
    $error = $e->getMessage();
    echo "Erro: $error";
}
