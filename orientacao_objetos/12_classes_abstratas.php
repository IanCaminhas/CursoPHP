<?php
    abstract class Teste {
        public static function testandoClasse() {
            echo "Este método é de uma classe abstrata <br>";
        }

        abstract public function testeAbs();

    }

    /*
        Se eu tentar instanciar uma classe abstrata, o seguinte erro é emitido:
        Fatal error: Uncaught Error: Cannot instantiate abstract class Teste in
    */
    //$t = new Teste;

    /*Saída: Este método é de uma classe abstrata.
    Posso chamar um método de uma classe abstrata.
    obs.: esse method precisa ser static. 

    Qual a vantagem disso ? posso chamar métodos sem que a classe esteja instanciada
    */
    Teste::testandoClasse(); 

    class Nova extends Teste {
        /* Se eu não implementar o method da classe abstrata e instanciar este objeto, o seguinte error
        é gerado:
            Fatal error: Class Nova contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Teste::testeAbs) in
        */
        public function testeAbs() {
            echo "Teste método abstrato <br>";
        }
    }

    $n = new Nova;
    //Saída: Teste método abstrato
    $n->testeAbs();
?>