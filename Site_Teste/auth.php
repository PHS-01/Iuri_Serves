<?php

    //Função para ver se tem usuario logado
    function hasUser() : bool{   
        return isset($_SESSION['user']);
    }

    //Função para terminar a sessão do usuario
    function logout () : void {
        unset($_SESSION['name']);
        session_destroy();
    }

?>