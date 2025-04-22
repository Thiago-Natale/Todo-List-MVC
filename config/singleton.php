<?php
class Singleton {
    private static $instance = null;
    private $connection;

    private $host = "localhost";
    private $dbName = "todo_list";
    private $username = "root";
    private $password = "";

    private function __construct() {
        try {
            $this->connection = new PDO(
                "mysql:host=$this->host;dbname=$this->dbName;charset=utf8",
                $this->username,
                $this->password
            );

            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage());
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }
}

?>