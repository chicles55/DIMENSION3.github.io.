<?php
$con=mysqli_connect("localhost","root","","alumnos");//ASIGNAMOS A UNA VARIABLE EL RESULTADO DE UNA CONEXION
if(!$con) //CHECA EL RESULTADO DE LA CONEXION: TRUE O FALSE

{
    die('No se establecio la conexion con el servidor:' .mysqli_error());; //FALSE EN CASO DE FALLA
}

$sql="INSERT INTO datos
values('$_POST[id_matricula]','$_POST[nombre]','$_POST[apellidos]','$_POST[edad]')";
if (!mysqli_query($con,$sql, mysqli_use_result))

{
    die('Error:'.mysqli_error($con));
}

echo "<center>";
echo "1 registro agregado<br>";
echo "<a href='consulta_alumnos.php'>ver registros</a>";
mysqli_close($con);
?>