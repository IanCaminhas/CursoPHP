<?php
    if(isset($_POST['times'])) {
        $ingredientes = $_POST['times'];
        //Exemplo de array com os checkbox marcados: Array ( [0] => Flamengo [1] => Fluminense )
        print_r($ingredientes);
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
       <form action="6_checkbox.php" method="POST">
        <!-- Se eu não colocar [](sintaxe de array) no name="times[]", vai ser impresso apenas o último valor marcado.
            Se eu não colocar a sintaxe de array, ele não vai entender que é um input com multi-valores.
            Ele vai pegar o último marcado e enviar
        -->
       <div>
            <input type="checkbox" name="times[]" value="Botafogo"> Botafogo
        </div>
        <div>
            <input type="checkbox" name="times[]" value="Cruzeiro"> Cruzeiro
        </div>
        <div>
            <input type="checkbox" name="times[]" value="Flamengo"> Flamengo
        </div>
        <div>
            <input type="checkbox" name="times[]" value="Fluminense"> Fluminense
        </div>
        <div>
            <input type="checkbox" name="times[]" value="São Paulo"> São Paulo
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
       </form>
    </body>
</html>
