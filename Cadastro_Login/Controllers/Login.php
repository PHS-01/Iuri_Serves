<?php 
    if (isset($_SESSION['user'])) {
        header("Location: /");
    }

    if (isset($_POST['email'], $_POST['senha'])) {

        $email = $_POST['email'];
        $password = $_POST['senha'];

        $result = find ("SELECT * FROM users where email='{$email}' AND password='$password'");

        $data = $result->fetchArray();        
        
        if ($data) {
            $_SESSION['user'] = $data['name'];
            header('Location: /');
        } else {
            header('Location: /Login');
        }
    } else {
        header('Location: /Login');
    }
?>