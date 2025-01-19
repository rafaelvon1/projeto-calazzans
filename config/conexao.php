<?php

class Database {
    private $host = "localhost"; // Host do banco de dados (localhost ou IP)
    private $dbName = "calazzans"; // Nome do banco de dados
    private $username = "root";   // Nome de usuário
    private $password = "";       // Senha do MySQL
    private $connection;          // Variável para armazenar a conexão

    function __construct() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->dbName};charset=utf8";

            $this->connection = new PDO($dsn, $this->username, $this->password);

            // Configurar o modo de erro para exceções
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $this->connection;

        } catch (PDOException $e) {
            // Exibir mensagem de erro caso a conexão falhe
            echo "Erro na conexão com o banco de dados: " . $e->getMessage();
            return null;
        }
    }
}
?>
