<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aumento de Sueldo</title>
</head>
<body>
    <form action="Hallar_Aumento.php" method="post">

    Ingresá tu sueldo:
        <input type="text" name="numSueldo" id="">
        <br/>
        <input type="submit" value="Enviar">

    </form>
</body>
</html>

<?php

/* 3) Hallar el Aumento al Sueldo que le corresponde a un empleado; si el sueldo está entre $320.000 y $500.000 su aumento será del 5%,
pero si su sueldo es menor el aumento será del 8%; finalmente mostrar por pantalla el sueldo y su respectivo aumento.
Por ejemplo: "Su sueldo es: $350.000 y su aumento es: $367.500" */

if ($_POST) {
    $numSueldo = $_POST['numSueldo'];
    
    if (($numSueldo >= 320000) && ($numSueldo <= 500000)){
        $numAumento = $numSueldo * 5/100;
        $numTotal = $numAumento + $numSueldo;

            echo "<br/>";
            echo "Su sueldo es de: ", $numSueldo, " y su aumento es de: ", $numTotal;
        }
    if ($numSueldo < 320000){
        $numAumento = $numSueldo * 8/100;
        $numTotal = $numAumento + $numSueldo;

            echo "<br/>";
            echo "Su sueldo es de: ", $numSueldo, " y su aumento es de: ", $numTotal;
        }
}

?>