<?php
    class Humano {
        public $idade;
        public $nome;
        public $profissao;

        public function falar() {}

        public function andar() {}
    }

    //Existe a classe Humano ? saída: A classe existe
    if(class_exists("Humano")) {
        echo "A classe existe <br>";
    }

     //Existe a classe Cachorro ? saída: A classe não existe
     if(class_exists("Cachorro")) {
        echo "A classe existe <br>";
    } else {
        echo "A classe não existe <br>";
    }
    //Retorna as propriedades da classe. Saída: Array ( [idade] => [nome] => [profissao] => )
    print_r(get_class_vars("Humano"));

    //Retorna os métodos da classe. cada posição é um metódo Saída: Array ( [0] => falar [1] => andar )
    print_r(get_class_methods("Humano"));
?>