<?php 

if (hasUser()) {
    header("Location: /dashboard");
}

if (  isset($_POST['email'], $_POST['password'])  ) {
    //login

    $email = $_POST['email'];    

    $user = new paciente(connection());
    
    //Ou os dados do usuário em um array,
    //ou o valor booleano FALSO
    $data = $user->find($email);   
    
    if ($data && password_verify($_POST['password'], $data['password'])) {
        $_SESSION['user'] = $data['name'];
        header('Location: /dashboard');
    } else {
        header('Location: /users/login');
    }
} else {
    header('Location: /users/login');
}