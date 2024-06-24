<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edad y Estatura</title>
</head>
<body>
    <form action="Trabajo-Nom-Salario.php" method="post">

    Ingresá tu nombre:
        <input type="text" name="nomUsuario" id="">
    Ingresá tu salario:
        <input type="text" name="numSalario" id="">
    Ingresá tus años trabajados:
        <input type="text" name="numTrabajo" id="">
        <br/>
        <input type="submit" value="Enviar">

    </form>
</body>
</html>

<?php

/* 4) Se necesita que el usuario ingrese su salario, nombre y años trabajando en una empresa, se desea mostrar sus datos por pantalla con el siguiente formato:
"El Señor NOMBRE, Cuenta con un salarido de: SALARIO; y lleva trabajando para nosotros AÑOS_TRABAJADOS Años". */

if ($_POST) {
    $nomUsuario = $_POST['nomUsuario'];
    $numSalario = $_POST['numSalario'];
    $numTrabajo = $_POST['numTrabajo'];

    echo "<br/>";
    echo "El señor ", $nomUsuario, ", cuenta con un salario de $", $numSalario, " y lleva trabajando para nosotros ", $numTrabajo, " años.";

}

?>