<?php

    $url = "https://www.google.com";
    $arrayUrl = parse_url($url);
   
    //Saída: Array ( [scheme] => https [host] => www.google.com )
    print_r($arrayUrl);
    echo "<br>";

    //Saída: www.google.com
    echo $arrayUrl["host"] . "<br>";

    $url2 = "https://www.amazon.com.br/gp/browse.html?node=19955263011&ref_=nav_em_br_sa_whisky_0_2_9_12";

    //Saída: Array ( [scheme] => https [host] => www.amazon.com.br [path] => /gp/browse.html [query] => node=19955263011&ref_=nav_em_br_sa_whisky_0_2_9_12 )
    $arrayUrl2 = parse_url($url2);

    print_r($arrayUrl2);



?>