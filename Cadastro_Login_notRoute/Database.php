<?php

    function connection() : SQLite3 {
        $db = new SQLite3('database.db');
        $db->busyTimeout(5000);
        $db->exec('PRAGMA journal_mode = wal;');
        return $db;
    }

    function find ($query) {    
        $connection = connection();
        return $connection->query($query);
    }

    function save ($query) {
        $db = connection();
        return $db->exec($query);
    }

    $connection = connection();

    $connection->exec(
        "CREATE TABLE IF NOT EXISTS users(
            id INTEGER PRIMARY KEY,
            name TEXT,
            email TEXT,
            password TEXT);"
    );

    $connection->exec(
        "CREATE TABLE IF NOT EXISTS imgs(
            id INTEGER PRIMARY KEY,
            name TEXT);"
    );
//$connection->exec("DROP TABLE users;");
?>