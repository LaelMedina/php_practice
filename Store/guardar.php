<?php
require_once '../Controllers/estudianteController.php';
require_once '../Validators/estudianteValidator.php';

header('Content-Type: application/json'); // Asegura que el contenido sea JSON

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $carnet = $_POST['carnet'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $fecha_nacimiento = $_POST['fecha_nacimiento'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];

        if (EstudianteValidator::validateEmptyFields($carnet, $nombres, $apellidos, $fecha_nacimiento, $email, $telefono, $direccion)) {

            EstudianteController::guardarEstudiante($carnet, $nombres, $apellidos, $fecha_nacimiento, $email, $telefono, $direccion);
            
            echo json_encode(["status" => "success", "message" => "Register stored succesfully."]);
        } else {
            echo json_encode(["status" => "error", "message" => "Invalid inputs, please check your information."]);
        }
    } else {
        echo json_encode(["status" => "error", "message" => "Request method not allowed."]);
    }
} catch (Exception $e) {
    echo json_encode(["status" => "error", "message" => "An error has ocurred: " . $e->getMessage()]);
}
