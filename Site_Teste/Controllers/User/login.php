<?php 

    if (hasUser()) {
        header("Location: /");
    }

    if (  isset($_POST['email'], $_POST['password'])  ) {

        $email = $_POST['email'];    

        $user = new User(connection());

        $data = $user->find($email);   
        
        if ($_POST['email'] == $data['use_email'] && $_POST['password'] == $data['use_password']) {
            $_SESSION['user'] = $data['use_name'];
            header('Location: /');
        } else {
            header('Location: /Login');
        }
    } else {
        header('Location: /Login');
    }

?>