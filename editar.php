<?php
include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>editar productos</title>
</head>
<link rel="stylesheet" type="text/css" href="http://leonelrojas18.xtrweb.com/css/leonelrojas18.css"/>

<script src="http://leonelrojas18.xtrweb.com/js/leonelrojas18.js" type="text/javascript"></script>

<body onLoad="carga();">
<header>
<h2>Editar</h2>
</header>
<div id="leo">
<section id="leon">

<section id="leone">



<!--DE AQUI COMIENZA SI DESEAR COPIAR A TU SITIO WEB TOMALO COMO SI EMPEZARAS DESDE BODY-->

<?php
$var="";
$var1="";
$var2="";
$var3="";
$var4="";

if(isset($_POST["btn1"])){
	$btn=$_POST["btn1"];
	$bus=$_POST["txtbus"];
	if($btn=="Buscar"){
		
		$sql="select * from productos where id_producto='$bus'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
			}
			if($var4=="Masculino"){
				$var4="selected";
				}
			
		}
	
	

	if($btn=="Actualizar"){
		$cod=$_POST["txtcod"];
		$nom=$_POST["txtnom"];
		$ape=$_POST["txtape"];
		$tel=$_POST["txttexi"];
		$sex=$_POST["txttepc"];
		$bex=$_POST["txttepv"];
		
		$sql="update productos set producto='$nom',descripcion='$ape',existencias='$tel',precio_compra='$sex',precio_compra='$bex' where id_producto='$cod'";
		
		$cs=mysql_query($sql,$cn);
		echo "<script> alert('Se actualizo correctamente');</script>";
		}
		}
	

?>
<form name="fe" action="" method="post">
<center>
<table border="2">
<tr>
<td>Buscar</td>
<td><input type="text" name="txtbus"/></td>
<td><input type="submit" name="btn1"  value="Buscar"  /></td>
</tr></table>

<table border="2">
<tr>
<td>Codigo</td>
<td><input type="text" name="txtcod" value="<?php echo $var?>" /></td>
</tr>

<tr>
<td>Producto</td>
<td><input type="text" name="txtnom"  value="<?php echo $var1?>"/></td>
</tr>
<tr>
<td>Descripcion</td>
<td><input type="text" name="txtape"  value="<?php echo $var2?>"/></td>
</tr>
<tr>
<td>Existencias;</td>
<td><input type="text" name="txttexi"  value="<?php echo $var3?>"/></td>
</tr>
<td>Precio Compra;</td>
<td><input type="text" name="txttepc"  value="<?php echo $var4?>"/></td>
</tr>
<td>Precio Venta;</td>
<td><input type="text" name="txttepv"  value="<?php echo $var4?>"/></td>
</tr>



</tr>
<tr align="center"><td colspan="2"><input type="submit" name="btn1" value="Actualizar"/>


</table>

</center>
<br />
<hr>
</form>
<br />



</section>
</section>
<section id="rojas">

</body>
</html>