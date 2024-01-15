<?php
    $pessoa = ["Ian", 29, "Estudante", "Pardo"];

    //Saída: Array ( [0] => Ian [1] => 29 [2] => Estudante [3] => Pardo )
    print_r($pessoa);
    echo "<br>";

    list($nome, $idade, $profissao, $corDaPele, $teste) = $pessoa;

    /* Saída:
    Ian
    29
    Estudante
    Pardo
    */
    echo "$nome <br>";
    echo "$idade <br>";
    echo "$profissao <br>";
    echo "$corDaPele <br>";

    /* 
        Considerando o array: 
        
        $pessoa = ["Ian", 29, "Estudante", "Pardo"];
        Como não possui valor no índice 5 e seu fizer: 
        list($nome, $idade, $profissao, $corDaPele, $teste) = $pessoa;
        Um erro é gerado: 7
            Atenção: Warning: Undefined array key 4 in C:\xampp\htdocs\curso\arrays\6_funcao_list.php on line 8
    */
?>