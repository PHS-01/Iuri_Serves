<?php
    unset($_SESSION['name']);
    session_destroy();
    
    header('Location: /Pages/Home.php');
?>