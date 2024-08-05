<?php

require_once '../Models/Conexion.php'; 

class EstudianteController {
    private $db;

    public function __construct() {
        $this->db = new Conexion();
    }

    public function index() {
        $estudiantes = $this->db->select('estudiantes');
        return $estudiantes;
    }

    /* 
        query: Tiene la consulta sql, los signos de pregunta se van a sustituir por lo valores ingresados en la consulta.
        consulta: Es el nombre de la variable que se encargara de preparar la consulta.
            consulta->bind_param(): Las letras 's' que se pasan como primer parametro al metodo simbolizan el tipo de datos del resto de 
            parametros siento en este caso s para string. 
    */

    public function guardarEstudiante($carnet, $nombres, $apellidos, $fecha_nacimiento, $email, $telefono, $direccion) {
        $query = "INSERT INTO estudiantes (carnet, nombres, apellidos, fecha_nacimiento, email, telefono, direccion)
                  VALUES (?, ?, ?, ?, ?, ?, ?)";

        $consulta = $this->db->prepare($query);

        $consulta->bind_param('sssssss', $carnet, $nombres, $apellidos, $fecha_nacimiento, $email, $telefono, $direccion);

        if ($consulta->execute()) {
            // echo "Estudiante guardado exitosamente.";
            header('Location: ../Views/bienvenido.php');
        } else {
            echo "Error: " . $consulta->error;
        }
    }
}
