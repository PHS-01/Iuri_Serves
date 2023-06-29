<?php

    include __DIR__ . '/Router.php';
    include __DIR__ . '/database.php';
    
    session_start();

    $connection = connection();
    
    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    rotear($url, $rotas);
?>