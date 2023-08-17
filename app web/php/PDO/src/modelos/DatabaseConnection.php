<?php
namespace App\Modelos;

use PDO;
use PDOException;

class DatabaseConnection {
    private $host = '127.0.0.1';
    private $db_name = 'optica_bd_borrador1';
    private $username = 'root';
    private $password = '';

    public function getConnection() {
        try {
            $connection = new PDO("mysql:host=localhost; dbname=optica_bd_borrador1","root","");
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;

        } catch(PDOException $e) {
            // Lanzar una excepción en lugar de imprimir el mensaje de error
            throw new Exception('Error de conexión: ' . $e->getMessage());
        }
    }
}
?>
