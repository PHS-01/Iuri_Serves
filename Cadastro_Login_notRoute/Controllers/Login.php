<?php

    if (isset($_SESSION['user'])) {
        header("Location: /Pages/Home.php");
    }

    if (isset($_POST['email'], $_POST['senha'])) {
        
        $email = $_POST['email'];
        $password = $_POST['senha'];

        $result = find ("SELECT * FROM users where email='{$email}' AND password='$password'");

        $data = $result->fetchArray();        
        
        if ($data) {
            $_SESSION['user'] = $data['name'];
            header('Location: /Pages/Home.php');
        } else {
            header('Location: /Pages/User/Login.html');
        }
    } else {
        header('Location: /Pages/User/Login.html');
    }
?>