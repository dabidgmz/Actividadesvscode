<?php

class Database
{
    private $host = "127.0.0.1";
    private $username = "root";
    private $password = "";
    private $database = "practica";
    private $connection;

    public function __construct()
    {
        try {
            $this->connection =new PDO("mysql:host=localhost; dbname=practica","root","");
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
?>

