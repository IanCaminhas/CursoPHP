<?php

//url do projeto. Essa URL é dinâmica. Qualquer arquivo pesquisado, será retornado
$BASE_URL = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI'] . '?');

?>