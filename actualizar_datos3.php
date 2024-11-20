<?php
$con=mysqli_connect("localhost","root","","alumnos") //SE CREA LA CONEXION AL SERVIDOR
if(!$con)
{
    echo"fallo";
    die(mysqli_error($con)); //MUESTRA EL ERROR QUE OCURRIO
}

$ID=$_POST['id']; //RECIBE LOS NUEVOS DATOS DEL REGISTRO
$NOMBRE=$_POST['nombre'];
$APELLIDOS=$_POST['apellidos'];
$EDAD=$_POST['edad'];

mysqli_query($con,"UPDATE datos
SET id_matricula='$ID', nombre='$NOMBRE' apellidos='$APELLIDOS', edad='$EDAD' WHERE id_matricula='$ID'"); //ACTUALIZA 
                                                                                                    //LOS DATOS DEL REGISTRO
header("location:actualizar_datos.php");//REDIRECCIONA A LA PRIMERA PAGINA DE ACTUALIZAR ARTICULOS
mysqli_close($con); //CERRAMOS LA CONEXION A LA BD
?>