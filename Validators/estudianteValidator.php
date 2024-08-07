<?php

require_once('../Models/Estudiante.php');

class EstudianteValidator{

    public static function validateEmptyFields(Estudiante $estudiante){

        if(
            $estudiante->carnet == "" ||
            $estudiante->nombres == "" ||
            $estudiante->apellidos == "" ||
            $estudiante->fecha_nacimiento = "" ||
            $estudiante->email = "" ||
            $estudiante->telefono = "" ||
            $estudiante->direccion            
            ){
            return true;
        }

        return false;

    }

}

