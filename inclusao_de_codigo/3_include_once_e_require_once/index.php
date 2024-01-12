<?php

// Arquivos que não existem
// include_once "teste.php";

//Arquivo que existe
include_once "teste2.php";

//Arquivo que não existe. No caso, vai parar a execução do sistema
//require_once "teste.php";

require_once "teste3.php";

/*
    Em resumo:
	Com include_once ou require_once, não vai existir sobreposição de arquivos.
	O arquivo vai ser incluído apenas uma vez.
*/

?>

<p>Testando código!</p>