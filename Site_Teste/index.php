<?php
    //Incluindo arquivos
    include __DIR__ . '/routes.php'; //Arquivo de rotas do meu site
    include __DIR__ . '/database.php';//Arquivo do banco de dado so meu site
    include __DIR__ . '/auth.php';//Arquivo de funções da sessão
    include __DIR__ . '/Models/user.php';//Arquivo de funções da sessão
    
    //inicia a sessão
    session_start();
    
    //Passa e amazena a url
    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    
    //Chama a função de roteamento
    routing($url, $routes);
?>