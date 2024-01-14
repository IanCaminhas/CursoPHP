<?php

    $textoHtml = "<p>Testando parágrafo.</p><div>Uma div</div><p>Outro parágrafo</p>";

    /* Saída: 
        Testando parágrafo.

        Uma div

        Outro parágrafo

        Lá no navegador, foi gerado um HTML. Basta fazer um inspecionar para visualizar.
    */
    echo $textoHtml;

    $salvaTextoBanco = strip_tags($textoHtml);

    /* Saída:
       Testando parágrafo.Uma divOutro parágrafo

       Agora tenho um texto puro. Basta fazer um inspecionar no navegador para visualizar.

    */
    echo $salvaTextoBanco;

?>