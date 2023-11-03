<?php

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        header('Location: /Register');
    }

    if (isset($_POST['name'], $_POST['email'], $_POST['password'])) {
    
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];


        $user = new User(connection());
        
        $data = $user->find($email);   

        if ($data['use_email'] == $email) {
            header('Location: /Register');
        } else {
            
            $user->save ($name, $email, $password);

            $_SESSION['user'] = $name;
            header('Location: /');
        }
    }
?>