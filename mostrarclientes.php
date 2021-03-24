<html>
<head>
<title>Mostrar Producto</title>

<body bgcolor="#dde4e8">
<?php

$conexion = mysqli_connect("localhost", "root", "");
if (! $conexion)
{
  echo "<h2 align='center'>ERROR: Imposible establecer conexión con el servidor</h2>";
  exit;
}
mysqli_select_db($conexion, "agricultores");

$result = mysqli_query($conexion, "SELECT * FROM producto");
echo "<center>Listado general: <br></center><br><br>";
echo "<center><table border = '1' bgcolor='#336699'> \n";
echo "<tr> \n";
echo "<td>Id</td>";
echo "<td>Nombre</td>";
echo "<td>Tipo</td>";
echo "<td>Descripcion</td>";
echo "<td>Cantidad</td>";
echo "</tr> \n";
while ($row = mysqli_fetch_row($result))
{

echo "<tr> \n";
echo "<td> <font color='#ffffff' size=3> $row[0] </font></td> \n";
echo "<td> <font color='#ffffff' size=3> $row[1] </font></td> \n";
echo "<td> <font color='#ffffff' size=3> $row[2] </font></td> \n";
echo "<td> <font color='#ffffff' size=3> $row[3] </font></td> \n";
echo "<td> <font color='#ffffff' size=3> $row[4] </font></td> \n";
echo "</tr> \n";
}
echo "</table> \n</center>";

echo "<br><br><br><center><font color='#336997' face='Verdana' size=4>Para regresar a la pagina anterior haga click <a href=iproducto.html>aqui</a></font></center>";
?>

</body>

</html>
