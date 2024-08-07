<?php
class Conexion {
    private $conexion;

    public function __construct() {
        $this->conexion = new mysqli('localhost', 'root', '', 'test');

        if ($this->conexion->connect_error) {
            die("Conexión fallida: " . $this->conexion->connect_error);
        }
    }

    public function prepare($query) {
        return $this->conexion->prepare($query);
    }

    public function select($table) {
        $result = $this->conexion->query("SELECT * FROM $table");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}