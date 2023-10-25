<?php
    include __DIR__ . '/Database.php';
    //include 'Database.php';

    session_start();

    $connection = connection();

    header("Location: /Pages/Home.php")
?>