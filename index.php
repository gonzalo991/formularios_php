<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="procesar.php" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <input id="nombre" type="text" name="nombre">
        <br>
        <br>
        <label for="edad">Edad:</label>
        <input id="edad" type="number" name="edad">

        <br>
        <br>

        <p>Sexo:</p>
        <label>
            <input type="radio" name="sexo" value="Masculino">
            Masculino
        </label>

        <br>
        <br>

        <label>
            <input type="radio" name="sexo" value="Femenino">
            Femenino
        </label>

        <br>
        <br>

        <p>Roles</p>
        <label>
            <input type="checkbox" name="roles[]" value="Administrador">
            Administrador
        </label>
        <label>
            <input type="checkbox" name="roles[]" value="Editor">
            Editor
        </label>
        <label>
            <input type="checkbox" name="roles[]" value="Lector">
            Lector
        </label>
        <br>
        <br>
        <label>
            Imagen:
            <br>
            <input type="file" name="image">
        </label>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>