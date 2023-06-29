<?php

// verificando se há usuário conectado
// usa função definida no arquivo auth.php
if (hasUser()) {
    header('Location: /dashboard');
}

if ($_SESSION['REQUEST_METHOD'] == 'GET') {
    header('Location: /users/create');
}

// chegar se é register 
if (isset($_POST['name'], $_POST['email'], $_POST['password'])) {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $modelo = new paciente(connection());
   
    $data = $modelo->find($email);

    if ($data) {
        $_SESSION['user'] = $name;
        header('Location: /dashboard');
    } else {
        $modelo->save( $name, $email, $password);
        $_SESSION['user'] = $name;        
        header('Location: /dashboard');
    }

}
