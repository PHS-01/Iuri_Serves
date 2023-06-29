<?php
    $rotas = [
        '/' => '/Pages/Home.php',
        '/Cadastro' => '/Pages/User/Cadastro.html',
        '/Login' => '/Pages/User/Login.html',
        '/Register' => '/Controllers/Register.php',
        '/Logar' => '/Controllers/Login.php',
        '/Logout' => '/Controllers/Logout.php'
    ];
    
    function rotear ($url, $rotas) {   
        if (array_key_exists($url, $rotas)) {
            include __DIR__ . $rotas[$url];
        } else {
            echo "<h1>Essa pagina não existe!!</h1>";
        }
    
    }
?>