<?php

class Estudiante{

    public $carnet;

    public $nombres;

    public $apellidos;
    
    public $fecha_nacimiento;

    public $email;

    public $telefono;

    public $direccion;

    public function __construct($carnet, $nombres, $apellidos, $fecha_nacimiento, $email, $telefono, $direccion) {
        $this->carnet = $carnet;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
    }

}