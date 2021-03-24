<html>
<body bgcolor="#dde4e8">
<title>Ingreso de Datos</title>
<?php

$conexion = mysqli_connect("localhost", "root", "");
if (! $conexion)
{
  echo "<h2 align='center'>ERROR: Imposible establecer conexión con el servidor</h2>";
  exit;
}
mysqli_select_db($conexion, "agricultores");

$Nombre=$_POST['Nombre'];
$TipoProducto=$_POST['TipoProducto'];
$Descripcion=$_POST['Descripcion'];
$Stock=$_POST['Stock'];

$sql =" INSERT INTO producto (Nombre,TipoProducto,Descripcion,Stock) VALUES ('$Nombre','$TipoProducto','$Descripcion','$Stock')";

$result = mysqli_query($conexion, $sql);
// listado de todos los socios
echo " <font color='#336997' face='Verdana' size=4><center>Gracias por ingresar los datos</center></font>";
echo "<br><br><br><center><font color='#336997' face='Verdana' size=4>Para regresar a la pagina anterior haga click <a href=iproducto.html>aqui</a></font></center>";
?>
</body>
</html>