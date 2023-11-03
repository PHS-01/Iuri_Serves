<?php
    function connection() {
        
        //Informações da conexão
        $servername = "localhost";
        $username = "root";
        $password = "";
        $port = 3306;
        $database = "db_database";

        //Cria a conexão
        $db = mysqli_connect($servername, $username, $password, $database, $port);

        //Checar conexão
        if (!$db) {
            die("Conexão falhou: " . mysqli_connect_error());
        }else{
            return $db;
        }
    }

    //Amazena a conexão em uma variavel 
    $connection = connection();

    //Função para salva um dado no banco de dados
    function save($query, $connection){
        return $connection->exec($query);
    }

    //Função para encontrar um dado no banco de dados
    function find($query, $connection){
        return $connection->mysqli_query( $connection, $query);
    }
?>