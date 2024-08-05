<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/registro.css">
    <title>Registro</title>
</head>

<body>

    <div id="container">

        <header>
            <h1 class="title">Registro de estudiantes</h1>
        </header>

        <form action="../Store/guardar.php" method="post" class="form-group">
            <label for="carnet">Carnet</label>
            <input type="text" id="carnet" name="carnet" maxlength="10">

            <label for="nombres">Nombres</label>
            <input type="text" id="nombres" name="nombres">

            <label for="apellidos">Apellidos</label>
            <input type="text" id="apellidos" name="apellidos">

            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
            <input type="text" id="fecha_nacimiento" name="fecha_nacimiento">

            <label for="email">Email</label>
            <input type="email" id="email" name="email">

            <label for="telefono">Teléfono</label>
            <input type="number" id="telefono" name="telefono">

            <label for="direccion">Dirección</label>
            <input type="text" id="direccion" name="direccion">

            <div>
                <input type="submit" value="Guardar" onclick="window.location.href='bienvenido.php'">
                <input type="button" value="Cancelar" onclick="if (confirm('¿Estás seguro de que quieres cancelar?')) window.location.href='index.php';">
            </div>
        </form>
    </div>

</body>

</html>
