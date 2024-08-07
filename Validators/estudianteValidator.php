<?php

require_once('../Models/Estudiante.php');

class EstudianteValidator
{

    public static function validateEmptyFields($carnet, $nombres, $apellidos, $fecha_nacimiento, $email, $telefono, $direccion)
    {

        $fields = [$carnet, $nombres, $apellidos, $fecha_nacimiento, $email, $telefono, $direccion];

        foreach ($fields as $field) {
            if (empty($field)) {
                return false;
            }
        }

        return true;
    }
}
