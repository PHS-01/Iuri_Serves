<?php
    if (isset($_SESSION['user'])) {
        header('Location: /Pages/Home.php');
    }

    if ($_SESSION['REQUEST_METHOD'] == 'GET') {
        header('Location: /Pages/Home.php');
    }

    if (isset($_POST['nome'], $_POST['email'], $_POST['senha'])) {
        
        $name = $_POST['nome'];
        $email = $_POST['email'];
        $password = $_POST['senha'];

        $result = find("SELECT * FROM users WHERE email='{$email}' AND password='$password'");    

        $data = $result->fetchArray();

        if ($data) {
            $_SESSION['user'] = $name;
            $_SESSION['email'] = $email;
        } else {
    
            save("INSERT INTO users ('name', 'email', 'password') values('{$name}','{$email}','{$password}')");

            $_SESSION['user'] = $name;
            $_SESSION['email'] = $email;
        }

        header('Location: /Pages/Home.php');
    }
?>