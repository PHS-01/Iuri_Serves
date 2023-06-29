<?php

class hospital
{
    protected $conn; //conexão

    public function __construct(SQLite3 $connection) {
        $this->conn = $connection;
    }

    public function save(string $name, string $email, string $cidade) {
        
        

        $query = "INSERT INTO tb_hospital ('name', 'email', 'cidade') " .
            "values('{$name}','{$email}','{$cidade}')";

        $result = $this->conn->exec($query);

        return $result;
    }

    public function find (string $email) {
        $query = "SELECT * FROM tb_hospital where email=:email";
        
        //prepara a consulta e gera um objeto SQLITE3Statetent
        $sttm = $this->conn->prepare($query);        

        //teste 1
        $sttm->bindValue(':email', $email);
        $result = $sttm->execute ();

        return $result->fetchArray();
    }

}