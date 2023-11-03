<?php
    class User{

        protected $conn; //Conexão com o banco de dados

        //Função para fazer a connexão 
        public function __construct(mysqli $connection) {
            $this->conn = $connection;
        }

        public function save(string $name, string $email, string $password) {
                        
            $sql = 'INSERT INTO tb_users (use_name, use_email, use_password) values(?,?,?)';
            
            $stmt = $this->conn->prepare($sql);

            $stmt->bind_param("sss", $name, $email, $password);

            $stmt->execute();
        }

        public function find (string $email) {
            $sql = 'SELECT * FROM tb_users WHERE use_email=?';
            
            $stmt = $this->conn->prepare($sql);

            $stmt->bind_param("s", $email);

            $stmt->execute();

            $result = $stmt->get_result();

            $row = $result->fetch_assoc();

            return $row;
        }
    }
?>