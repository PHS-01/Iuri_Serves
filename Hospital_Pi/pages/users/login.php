<?php 


if (hasUser()) {
    header("Location: /dashboard");
}

if (isset($_POST['email'], $_POST['password'])) {
  

    $email = $_POST['email'];

    $modelo = new paciente(connection());
   
    $data = $modelo->find($email);


    if ($data) {
        $_SESSION['user'] = $data['name'];
        header('Location: /dashboard');
    } else {
        header('Location: /users/login');
    }
} else {
    header('Location: /users/login');
}