<?php
    //Classe anônima
    $pessoa = new class() {
        public $nome = "Ian";
        public function dizerNome() {
            echo "Olá meu nome é $this->nome <br>";
        }
    };

    //Saída: Ian
    echo $pessoa->nome . "<br>";
    //Saída: Olá meu nome é Ian
    $pessoa->dizerNome();
?>