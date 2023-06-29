<?php

function connection() : SQLite3 {
    return new SQLite3('database.db');
}

$connection = connection();


$connection->exec(
    "CREATE TABLE IF NOT EXISTS tb_pacientes(
        id INTEGER PRIMARY KEY,
        name TEXT,
        email TEXT,
        password TEXT)"
);

$connection->exec(
    "CREATE TABLE IF NOT EXISTS tb_funcionarios(
        id INTEGER PRIMARY KEY,
        name TEXT,
        email TEXT,
        password TEXT)"
);

$connection->exec(
    "CREATE TABLE IF NOT EXISTS tb_hospital(
        id INTEGER PRIMARY KEY,
        name TEXT,
        email TEXT,
        cidade TEXT
        )"
);



function find ($query, $connection) {    
    return $connection->query($query);
}

function save ($query) {
    $db = connection();
    return $db->exec($query);    
}

?>