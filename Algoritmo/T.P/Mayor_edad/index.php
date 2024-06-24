<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayoría de Edad</title>
</head>
<body>
    <section>
    <form action="index.php" method="post">
        <input type="number" name="edad" placeholder="Ingrese la edad del usuario. " required><br>
        <input type="number" name="Altura" step="0.01" placeholder="Ingrese la altura del usuario. " required>
        <input type="submit" value="Confirmar">
    </form>
    </section>
    <section>
    <?php
/* El sistema requiere ingresar la edad del usuario, verificar si es mayor de edad y mostrar por pantalla la siguiente leyenda:
   Es mayor de edad, de lo contrario es menor de edad, teniendo en cuenta que la mayoría de edad es cuando tiene 18 o más años.
*/
/*En base al ejercicio anterior, incorporar lo siguiente, si es mayor de edad y tiene la estatura menor a 170 centimetros, mostrar
el siguiente mensaje "Puede ingresar a la montaña rusa", de lo contrario "No puede ingresar".
*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $edad = $_POST['edad'];
    $Altura = $_POST['Altura'];
if ($edad >= 18 && $Altura <= 1.70) {
        echo "<p>Puede ingresar a la montaña rusa</p>";
    } else{
        echo "<p>No puede ingresar</p>";
    }
}
?>
    </section>
</body>
</html>
