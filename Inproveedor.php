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

$NombreP=$_POST['NombreP'];
$ApellidoP=$_POST['ApellidoP'];
$CiudadP=$_POST['CiudadP'];
$DireccionP=$_POST['DireccionP'];
$Telefono=$_POST['Telefono'];
$sql =" INSERT INTO proveedor (NombreP,ApellidoP,CiudadP,DireccionP,Telefono) VALUES ('$NombreP','$ApellidoP','$CiudadP','$DireccionP','$Telefono')";

$result = mysqli_query($conexion, $sql);

echo " <font color='#336997' face='Verdana' size=4><center>Gracias por ingresar sus datos</center></font>";
echo "<br><br><br><center><font color='#336997' face='Verdana' size=3>Proveedores ingresados en la base de datos de La Casa del Agricultor</font></center>";
echo "<br><br><br><center><font color='#336997' face='Verdana' size=4>Para regresar a la pagina anterior haga click <a href=iproveedor.html>aqui</a></font></center>";
?>
</body>

</html>