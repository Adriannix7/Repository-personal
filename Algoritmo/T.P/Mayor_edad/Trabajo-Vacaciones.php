<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edad y Estatura</title>
</head>
<body>
    <form action="Trabajo-Vacaciones.php" method="post">

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

/* 5) Si tiene entre 10 a 15 años trabajando y si su salario es igual o inferior a $350.000,00 debe mostrar el siguiente mensaje:
El Señor NOMBRE, Cuenta con un salarido de: SALARIO; y lleva trabajando para nosotros AÑOS_TRABAJADOS Años,
Le corresponde "Vacaciones pagas" de lo contrario "No tendrá vacaciones pagas". */

if ($_POST) {
    $nomUsuario = $_POST['nomUsuario'];
    $numSalario = $_POST['numSalario'];
    $numTrabajo = $_POST['numTrabajo'];

    if (($numTrabajo >= 10) && ($numTrabajo <= 15)) {
        if ($numSalario <= 350000) {
        echo "<br/>";
        echo "El señor ", $nomUsuario, " cuenta con un salario de $", $numSalario, " y lleva trabajando para nosotros ", $numTrabajo, " años, le corresponde vacaciones pagas.";
        }
            }else{
                echo "<br/>";
                echo "No le corresponde vacaciones pagas.";
    }
}
?>