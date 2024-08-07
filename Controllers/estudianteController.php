<?php

require_once '../Models/Conexion.php';

class EstudianteController
{
    private static $db;
    private $tableName = 'estudiantes';

    public function __construct()
    {
        self::initDB();
    }

    private static function initDB()
    {
        if (self::$db == null) {
            self::$db = new Conexion();
        }
    }

    public static function index()
    {
        self::initDB();

        $estudiantes = self::$db->select('estudiantes');

        return $estudiantes;
    }

    public static function guardarEstudiante($carnet, $nombres, $apellidos, $fecha_nacimiento, $email, $telefono, $direccion)
    {

        self::initDB();

        $query = "INSERT INTO estudiantes (carnet, nombres, apellidos, fecha_nacimiento, email, telefono, direccion)
                  VALUES (?, ?, ?, ?, ?, ?, ?)";

        $consulta = self::$db->prepare($query);

        $consulta->bind_param('sssssss', $carnet, $nombres, $apellidos, $fecha_nacimiento, $email, $telefono, $direccion);

        if ($consulta->execute()) {
            // echo "Estudiante guardado exitosamente.";
            header('Location: ../Views/bienvenido.php');
        } else {
            echo "Error: " . $consulta->error;
        }
    }
}
