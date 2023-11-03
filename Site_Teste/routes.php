<?php
    //array de rotas 
    $routes = [
        '/' => '/Pages/home.php',
        
        '/Register' => '/Pages/User/register.php',
        '/User/Register' => '/Controllers/User/register.php',

        '/Login' => '/Pages/User/login.php',
        '/User/Login' => '/Controllers/User/login.php',

        '/User/Logout' => '/Controllers/User/logout.php'
    ];

    //Função para fazer o roteamento do site
    function routing ($url, $route) {

        //Condição de url existir no array rotas
        if (array_key_exists($url, $route)) {//Verificação se a url existe no array rotas
            //Incluir a rota na url
            include __DIR__ . $route[$url];
        } else {
            //Manda de volta para a pagina principal
            header("Location: /");
        }
    
    }
?>