<?php

class Database {
    private static $instance = null;
    private $connection;

    private $host = "localhost";
    private $dbName = "todo_list";
    private $username = "root";
    private $password = "";

    // Construtor privado → impede que usem new Database()
    private function __construct() {
        try {
            $this->connection = new PDO(
                "mysql:host=$this->host;dbname=$this->dbName;charset=utf8",
                $this->username,
                $this->password
            );
            // Define erros como exceções
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage());
        }
    }

    // Método estático para obter a instância única
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // Método público para acessar a conexão
    public function getConnection() {
        return $this->connection;
    }
}