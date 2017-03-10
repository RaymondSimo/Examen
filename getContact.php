<?php
$db_host = "am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$db_name = "iis320fhcpx25b6d";
$db_user = "x4zgv7cwfuaergf6";
$db_password = "z3vozuor0t984sxs";
$connection = mysqli_connect('am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'x4zgv7cwfuaergf6', 'z3vozuor0t984sxs');
mysqli_select_db($connection,$db_name) or die("Error al seleccionar la base de datos:".mysqli_error());
@mysqli_query("SET NAMES 'utf8'");

if(isset($_POST["id_producto"])){

$id_producto = $_POST["id_producto"];
$sql_query = "SELECT * FROM productos WHERE id_producto=$id_producto;";
$result = mysqli_query($sql_query);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
$rows[] = $r;
}
print json_encode($rows);
}else
echo "No existe el producto";
mysqli_close($connection);
?>