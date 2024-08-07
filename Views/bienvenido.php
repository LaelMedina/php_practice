<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/bienvenido.css?v=1.0">
    <title>Bienvenido</title>
</head>

<body>

    <div id="container">

        <header>
            <h1 class="title">Bienvenido</h1>
            <?php
            require_once('../Controllers/estudianteController.php');
            $estudiantes = EstudianteController::index();

            echo '<h3>Carnet </h3> ' . $estudiantes[count($estudiantes) - 1]['carnet'] .'<br><br>';
            echo '<h3>Nombres </h3> ' . $estudiantes[count($estudiantes) - 1]['nombres'] .'<br><br>';
            echo '<h3>Apellidos </h3> ' . $estudiantes[count($estudiantes) - 1]['apellidos'] .'<br><br>';
            ?>
        </header>


        <form>
            <input type="button" value="Salir" onclick="window.location.href='../Views/index.php'">
        </form>

    </div>

</body>

</html>