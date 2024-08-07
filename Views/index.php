<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de estudiantes</title>
    <link rel="stylesheet" href="styles/index.css">
</head>

<body>

    <div id="container">

        <header>
            <h1 class="title">Registro de estudiantes</h1>
        </header>
        
        <form action="registro.php">
            <input type="submit" value="Nuevo">
        </form>
        
        <table id="content-table">
            <thead>
                <tr>
                    <td>Carnet</td>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once('../Controllers/estudianteController.php');
                $estudiantes = EstudianteController::index();

                foreach ($estudiantes as $estudiante) {
                    echo "<tr>
                            <td>{$estudiante['carnet']}</td>
                            <td>{$estudiante['nombres']}</td>
                            <td>{$estudiante['apellidos']}</td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    
    </div>

</body>
</html>