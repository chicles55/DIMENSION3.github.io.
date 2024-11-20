<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css.css"><!--ESPECIFICAMOS EL ARCHIVO CSS A UTILIZAR-->
        <meta charset="UTF-8"/>
        <style type="text/css"></style>
    </head>
    <body>
        <?php
        $con=mysqli_connect("localhost","root","","alumnos");//SE CREA LA CONEXION 
                                                                                                     //AL SERVIDOR
        $resultado=mysqli_query($con,"select * from datos");//CONSULTAMOS EL CONTENIDO DE LA TABLA ARTICULOS
        if($resultado===false){
            echo "fallo";
            die(mysqli_error());//MUESTRA EL ERROR QUE OCURRIO
        }
            echo "<center>";
            echo "<h1>Actualizar datos<h1>";
            echo "<table border='1'>
            <tr>
            <th>matricula</th>
            <th>nombre</th>
            <th>apellidos</th>
            <th>edad</th>
            </tr>";
            while($row=mysqli_fetch_array($resultado))//MUESTRA EL CONTENIDO DE LOS ARTICULOS
            
            {
            echo"<tr>";
            echo"<td>".$row['id_matricula']."</td>";
            echo"<td>".$row['nombre']."</td>";
            echo"<td>".$row['apellidos']."</td>";
            echo"<td>".$row['edad']."</td>";
            echo"</tr>";
            }
            echo"</table>";
            $registros=mysqli_num_row($resultado);
            echo"<br>El numero de registros son:;" .$registros;
            mysqli_close($con);//CERRAMOS LA CONEXION A LA BD
        ?>

        <H3>Escribe la Matricula del registro a editar</H3>
        <form action="actualizar2_datos.php" method="post">
        Matricula:<input type=text name="id"/>
        <input type="submit" value="editar"/>
        </form>
    </body>
</html>