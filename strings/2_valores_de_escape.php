<?php
    /*  Estou falando para o PHP que o conteúdo desse arquivo é texto puro. 
        Se eu não usar esse header, o conteúdo a ser exibido no navegador 
        não será considerado como texto e sim HTML.
            Exemplo: <br> é HTML. Com header(), não será mais lido como uma tag HTML. 
            Vai aparcer <br> como texto mesmo.
        Em suma, para usar um valor de escape(\n), preciso usar esse header().
        Valores de ecape são para textos.
    */
    header("Content-type: text/plain");
    //Saída: Teste <br>... \n é para pular linha
    echo "Teste <br> \n";

    /* Saída:
        Isso aqui vai ficar na primeira linha 
        E isso na segunda linha
    */
    echo "Isso aqui vai ficar na primeira linha \n E isso na segunda linha \n";

    //Testando o tab. Saída: Testando o tab 	 aqui 
    echo "Testando o tab \t aqui \n";

    //Barra invertida \ ... Saída: Barra invertida \ 
    echo "Barra invertida \\ \n";

    //Dólar ... Saída: Imprimindo o dólar $
    echo "Imprimindo o dólar \$";



?>