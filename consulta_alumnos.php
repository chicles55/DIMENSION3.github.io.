<meta charset="8">
<html>
<head>
<title>Consultar alumnos</title>
<link rel="stylesheet" type="text/css" href="CSS.css">
<meta charset="utf-8"/>
<style type="text/css"></style>
</head>
<body>
<center>
<?php
$con=mysqli_connect("localhost","root","","alumnos");//SE CREA CONEXION AL SERVIDOR
$resultado=mysqli_query($con,"select * from datos");//CONSULTAMOS EL CONTENIDO DE LA TABLA DATOS
if($resultado===false){
    echo "fallo";
    die(mysqli_error()); //MUESTRA EL ERROR QUE OCURRIO
}

echo "<center><font face='arial'>";
echo "<a href='consulta_alumnos.php'>Actualizar tabla</a>";
echo "<h1>Consulta de la tabla datos</h1>";
echo "<table border='1'>
<tr>
<th>matricula</th>
<th>nombre</th>
<th>apellidos</th>
<th>edad</th>
</tr>";
while($row=mysqli_fetch_array($resultado))//MUESTRA EL CONTENIDO DE CADA ALUMNO
{
    echo"<tr>";
    echo"<td align=center>" .$row['id_matricula']."</td>";
    echo"<td>" .$row['nombre']."</td>";
    echo"<td>" .$row['apellido']."</td>";
    echo"<td align=center>".$row['edad']."</td>";
    echo"</tr>";
}
echo"<table>";
$registros=mysqli_num_rows($resultado);
echo"<br>registros:".$registros;
mysqli_close($con);//CERRAMOS LA CONEXION A LA BD 
?>
</center>
</body>
</html>