<?php
namespace App\Modelos;

use PDO;
use PDOException;

class Conexion {
    private $host = '3.145.43.228';
    private $usuario = 'david';
    private $contrasena = '123';
    private $baseDatos = 'optica_bd_borrador1';
    private $conexion;

    public function obtenerConexion() {
        if ($this->conexion === null) {
            $this->conectar();
        }
        return $this->conexion;
    }

    private function conectar() {
        try {
            $this->conexion = new PDO("mysql:host={$this->host};dbname={$this->baseDatos}", $this->usuario, $this->contrasena);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
        }
    }
}
