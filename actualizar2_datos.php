<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css.css"><!--ESPECIFICAMOS EL ARCHIVO CSS A UTILIZAR-->
        <meta charset="utf-8"/>
        <style type="text/css"></style>
    </head>
    <body>
        <?php
        $con=mysqli_connect("localhost","root","","alumnos");//SE CREA LA CONEXION 
                                                                                                     //AL SERVIDOR
        $matricula=$_POST['id']; //CLAVE DEL REGISTRO SELECCIONADO
        $resultado=mysqli_query($con,"select * from datos where id_matricula=$matricula");//CONSULTAMOS EL  
                                                                                                        //CONTENIDO DE LA               
                                                                                                        //TABLA ARTICULOS
        if($resultado===false)
        {
            echo "fallo";
            die(mysqli_error()); //MUESTRA EL ERROR QUE OCURRIO
        }
        echo "<center>";
        echo "<form action=actualizar3_datos.php method=POST>";
        echo "<h1>Editar datos</h1>";
        echo "<table border='0'>";
        while($row=mysqli_fetch_array($resultado)) //MUESTRA EL CONTENIDO DEL REGISTRO A EDITAR

        {
            echo"<tr>";
            echo"<td>matricula:</td>"; echo "<td> <input type='text' name='id' value=".$row['id_matricula']."></td></tr>";
            echo"<tr>";
            echo"<td>nombre:</td>";echo "<td><input type='text' name='nombre' value=".$row['nombre']."></td></tr>";
            echo"<tr>";
            echo"<td>apellido:</td>";echo "<td><input type='text' name='apellido' value=".$row['apellido']."></td></tr>";
            echo"<tr>";
            echo"<td>edad:</td>";echo "<td><input type='text' name='edad' value=".$row['edad']."></td></tr>";
            echo"<tr>";
        }
    
    echo"</table>";
    mysqli_close($con); //CERRAMOS LA CONEXION A LA BD
echo "<input type=submit value =actualizar_datos/>"; //SE VA AL ARCHIVO ACTUALIZAR 3
echo"</form>";

?>
</body>
</html>