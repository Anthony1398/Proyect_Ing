<html>
<head>
<title>Lista de Proveedores</title>

<body bgcolor="#dde4e8">
<?php

$conexion = mysqli_connect("localhost", "root", "");
if (! $conexion)
{
  echo "<h2 align='center'>ERROR: Imposible establecer conexión con el servidor</h2>";
  exit;
}
mysqli_select_db($conexion, "agricultores");

$result = mysqli_query($conexion, "SELECT * FROM proveedor");
echo "<center>Listado general: <br></center><br><br>";
echo "<center><table border = '1' bgcolor='#336699'> \n";
echo "<tr> \n";
echo "<td>IdProveedor</td>";
echo "<td>NombreP</td>";
echo "<td>ApellidoP</td>";
echo "<td>CiudadP</td>";
echo "<td>DireccionP</td>";
echo "<td>Telefono</td>";
echo "</tr> \n";
echo "<tr> \n";
while ($row = mysqli_fetch_row($result))
{

echo "<td> <font color='#ffffff' size=3> $row[0] </font></td> \n";
echo "<td> <font color='#ffffff' size=3> $row[1] </font></td> \n";
echo "<td> <font color='#ffffff' size=3> $row[2] </font></td> \n";
echo "<td> <font color='#ffffff' size=3> $row[3] </font></td> \n";
echo "<td> <font color='#ffffff' size=3> $row[4] </font></td> \n";
echo "<td> <font color='#ffffff' size=3> $row[5] </font></td> \n";
echo "</tr> \n";
}
echo "</table> \n</center>";

echo "<br><br><br><center><font color='#336997' face='Verdana' size=4>Para regresar a la pagina anterior haga click <a href=iproveedores.html>aqui</a></font></center>";
?>
</body>

</html>