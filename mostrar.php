<?php 

include('register.php');
$con=mysql_connect($host,$user,$pw) or die ("Problemas al conectar server");
mysql_select_db($db,$con) or die("Problemas al conectar database");

$result = mysql_query("SELECT * FROM productos" ) ; 
if ($row = mysql_fetch_array($result)){ 
echo "<table border = '100%' width='100%'> "; 
echo "<tr><td><strong>Cabecera 1</strong></td><td><strong>Cabecera 2</strong></td><td><strong>Cabecera 3</strong></td><td><strong>Cabecera 4</strong></td><td><strong>Cabecera 5</strong></td></tr> "; 
do { 
echo "<tr><td>".$row['id_producto']."</td><td>".$row['producto']."</td><td>".$row['descripcion'].$row['precio_compra'].$row['precio_venta']."</td></tr> "; 
} while ($row = mysql_fetch_array($result)); 
echo "</table> "; 
} else { 
echo "Texto si no se encuentran resultados"; 
} 
?> 
