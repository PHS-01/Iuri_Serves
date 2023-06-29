<?php

//retorna verdadeiro ou falso
function hasUser() : bool{   
    return isset($_SESSION['user']);
}

function logout () : void {
    unset($_SESSION['name']);
    session_destroy();
}