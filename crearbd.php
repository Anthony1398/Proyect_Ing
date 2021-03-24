<html>    
<body>
<?php
//nombre que le damos a la BD.
  $basedatos = "agricultores";

//conectamos con el servidor
   $conexion = @mysqli_connect("localhost", "root", "");
// comprobamos que hemos estabecido conexión en el servidor
if (! $conexion)
    {
     echo "<h2 align='center'>ERROR: Imposible establecer conexión con el servidor</h2>";
     exit;
    }
// obtenemos una lista de las bases de datos del servidor
$db = mysqli_query($conexion, "SHOW DATABASES");
// vemos cuantas BD hay
   $num_bd = mysqli_num_rows($db);


 

// Creamos ta tabla
$sql  = "CREATE TABLE Producto (";
$sql .= "IdProducto INT PRIMARY KEY AUTO_INCREMENT, ";
$sql .= "Nombre        VARCHAR(50) , ";
$sql .= "TipoProducto      VARCHAR(50) , ";
$sql .= "Descripcion          VARCHAR(50)  , ";
$sql .= "Stock       INT(10)) ";

if (@mysql_db_query($basedatos, $sql, $conexion))
 {
  echo "<h2 align='center'><b><font face=Book Antiqua color=#008000>La tabla Producto se ha creado con exito</font></b></h2>";
 }
  else 
   { 
     echo "<h2 align='center'><font color=red>No se ha podido crear la tabla producto</font></h2>";
   }

$sql  = "CREATE TABLE Proveedor (";
$sql .= "IdProveedor INT PRIMARY KEY AUTO_INCREMENT, ";
$sql .= "NombreP        VARCHAR(50) , ";
$sql .= "ApellidoP        VARCHAR(50) , ";
$sql .= "CiudadP        VARCHAR(50) , ";
$sql .= "DireccionP        VARCHAR(50), ";
$sql .= "Telefono        VARCHAR(20)) ";

if (@mysql_db_query($basedatos, $sql, $conexion))
 {
  echo "<h2 align='center'><b><font face=Book Antiqua color=#008000>La tabla Proveedor se ha creado con exito</font></b></h2>";
 }
  else 
   { 
     echo "<h2 align='center'><font color=red>No se ha podido crear la tabla Proveedor</font></h2>";
   }

   $sql  = "CREATE TABLE Compra (";
   $sql .= "IdCompra INT PRIMARY KEY AUTO_INCREMENT, ";
   $sql .= "FechaCompra        DATE , ";
   $sql .= "Cantidad        INT , ";
   $sql .= "TotalCompra        FLOAT , ";
   $sql .= "IdProveedor        INT, ";
   $sql .= "FOREIGN KEY (IdProveedor) REFERENCES Proveedor (IdProveedor)) ";

   if (@mysql_db_query($basedatos, $sql, $conexion))
 {
  echo "<h2 align='center'><b><font face=Book Antiqua color=#008000>La tabla Compra se ha creado con exito</font></b></h2>";
 }
  else 
   { 
     echo "<h2 align='center'><font color=red>No se ha podido crear la tabla Compra</font></h2>";
   }

   $sql  = "CREATE TABLE Suministra (";
   $sql .= "IdProducto INT , ";
   $sql .= "IdCompra INT, ";
   $sql .= "Costo       FLOAT , ";
   $sql .= "PRIMARY KEY(IdProducto, IdCompra), ";
   $sql .= "FOREIGN KEY (IdProducto) REFERENCES Producto (IdProducto)) ";

   if (@mysql_db_query($basedatos, $sql, $conexion))
   {
    echo "<h2 align='center'><b><font face=Book Antiqua color=#008000>La tabla Suministra se ha creado con exito</font></b></h2>";
   }
    else 
     { 
       echo "<h2 align='center'><font color=red>No se ha podido crear la tabla Suministra</font></h2>";
     }
?>
 </body>
</html>
