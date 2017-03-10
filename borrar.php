
 <?php
include('register.php');

$con=mysqli_connect($host,$user,$pw) or die ("Problemas al conectar server");
mysqli_select_db($db,$con) or die("Problemas al conectar database");

$regist=mysqli_query("SELECT id_producto FROM productos WHERE producto='$_POST[nombre]'",$con) or die ("Problemas en la consulta:".mysqli_error());



if($reg=mysqli_fetch_array($regist)){
	mysql_query("DELETE FROM productos WHERE producto='$_POST[nombre]'",$con);


echo "datos eliminados";

}else{

	echo "datos no han sido eliminados";

}
?>