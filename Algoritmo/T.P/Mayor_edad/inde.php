<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Verificar Edad</title>
</head>
<body>
    <h1>Verificar Edad</h1>
    <form method="post">
        <label for="edad">Ingrese su edad:</label>
        <input type="number" id="edad" name="edad" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    // Verificar si el formulario ha sido enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener la edad del formulario
        $edad = $_POST['edad'];

        // Verificar si el usuario es mayor de edad
        if ($edad >= 18) {
            echo "<p>Es mayor de edad</p>";
        } else {
            echo "<p>Es menor de edad</p>";
        }
    }
    ?>
</body>
</html>
