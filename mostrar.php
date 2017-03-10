<?php 
$host = "am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$db = "iis320fhcpx25b6d";
$user = "x4zgv7cwfuaergf6";
$pw = "z3vozuor0t984sxs";
$con=mysqli_connect('am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com','x4zgv7cwfuaergf6','z3vozuor0t984sxs') or die ("Problemas al conectar server");
mysqli_select_db($con,'iis320fhcpx25b6d') or die("Problemas al conectar database");

$result = mysqli_query("SELECT * FROM productos" ) ; 
if ($row = mysqli_fetch_array($result)){ 
echo "<table border = '100%' width='100%'> "; 
echo "<tr><td><strong>id_producto</strong></td><td><strong>producto</strong></td><td><strong>descripcion</strong></td><td><strong>existencias</strong></td><td><strong>precio_compra</strong></td><td><strong>precio_venta</strong></td></tr> "; 
do { 
echo "<tr><td>".$row['id_producto']."</td><td>".$row['producto']."</td><td>".$row['descripcion']."</td><td>".$row['existencias']."</td><td>".$row['precio_compra']."</td><td>".$row['precio_venta']."</td></tr> "; 
} while ($row = mysqli_fetch_array($result)); 
echo "</table> "; 
} else { 
echo "Texto si no se encuentran resultados"; 
} 
?> 
