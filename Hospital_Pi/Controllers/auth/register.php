<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    header('Location: /users/create');
}


if (isset($_POST['name'], $_POST['email'], $_POST['password'])) {
   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $user = new paciente(connection());
    
    
    $data = $user->find($email);   

    if ($data) {
        $_SESSION['user'] = $data['name'];
        header('Location: /dashboard');
    } else {

        $retorno = $user->save ($name, $email, $password);
    

        $_SESSION['user'] = $name;
        header('Location: /dashboard');
    }

}
