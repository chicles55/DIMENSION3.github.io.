<?php
$con=mysqli_connect("localhost","root","","alumnos");//ASIGNAMOS A UNA VARIABLE 
                                                                                             //EL RESULTADO DE LA CONEXION
echo "<br><center>";
if(!$con) //CHECA EL RESULTADO DE LA CONEXION TRUE O FALSE
{
    die('No se establecio la conexion con el servidor:' .mysqli_error($con));//FALSE EN CASO DE FALLA
}
$sql="DELETE FROM datos WHERE id_matricula='{$_POST["id_matricula"]}'";
if (!mysqli_query($con,$sql,mysqli_use_result))

{
    die('Error:'.mysqli_error($con));
}echo "registro borrado<br><br>";
echo "<a href='borrar_datos.html'>Regresar</a>";//LLAMAMOS A CONSULTAS PARA VER EL NUEVO REGISTRO
mysqli_close($con);
?>