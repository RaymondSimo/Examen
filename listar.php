
 <?php
include('register.php');

$con=mysql_connect($host,$user,$pw) or die ("Problemas al conectar server");
mysql_select_db($db,$con) or die("Problemas al conectar database");

$registro=mysql_query("SELECT * FROM productos") or die ("Problemas en la consulta:".mysql_error());

while($reg=mysql_fetch_array($registro)){

echo $reg['producto']."<br>";
echo $reg['descripcion']."<br>";
echo $reg['existencias']. "<br>";
echo $reg['precio_compra']. "<br>";
echo $reg['precio_venta']. "<br>";

}
?>
