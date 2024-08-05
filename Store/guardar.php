<?php
require_once '../Controllers/estudianteController.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $carnet = $_POST['carnet'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];

    $controller = new estudianteController();
    $controller->guardarEstudiante($carnet, $nombres, $apellidos, $fecha_nacimiento, $email, $telefono, $direccion);
}
