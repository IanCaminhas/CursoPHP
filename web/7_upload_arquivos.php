<?php
    /*
    Saída: Array ( [imagem] => Array ( [nome] => temp_xpZF23H.png [tipo] => imagem/png [tmp_name] => C:\xampp\tmp\phpE8F3.tmp [erro] => 0 [tamanho] = > 1665704))
    Aqui tenho o nome do arquivo, acesso ao tipo de arquivo, acesso ao nome temporário.
    O arquivo é salvo em outro lugar antes, porque o PHP pode manusear(tratar) o arquivo onde será salvo depois.
    Também temos o erro e o tamanho do arquivo em bytes antes.
    Com essas informações,poderei realizar as tratativas antes de realizar o upload de fato.
    
    */
    if(isset($_FILES)) {
        print_r($_FILES);
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
        <!-- Todos esses atributos devem estar preenchidos para realizarmos o upload com sucesso:
        enctype="multipart/form-data", type="file", name="imagem", method="POST"
        -->
        <form action="7_upload_arquivos.php" method="POST" enctype="multipart/form-data">
            <div>
                <input type="file" name="imagem">
            <div>
            <input type="submit" value="Enviar">
    </body>
</html>
