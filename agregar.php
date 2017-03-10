<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<title>Examen parcial</title>
</head>
<body background="images/sunny.jpg" style="background-attachment: fixed" >
	<center><div class="tit"><h2 style="color: #0000FF; ">Agregar nuevos productos</h2>
		<center><div class="Ingreso">

	<table border="0" align="center" valign="middle">
		<tr>
		<td rowspan=2>
		<!--<form action="validar.php" method="post">

		<table border="0">

		<tr><td><label style="font-size: 14pt"><b>Correo: </b></label></td>
			<td width=80> <input class="form-group has-success" style="border-radius:15px;" type="text" name="mail" placeholder="junior@yhoo.fr" />></td></tr>
		<tr><td><label style="font-size: 14pt"><b>Contraseña: </b></label></td>
			<td witdh=80><input style="border-radius:15px;" type="password" name="pass" placeholder="Ingresa tu password" />></td></tr>
		<tr><td></td>
			<td width=80 align=center><input class="btn btn-primary" type="submit" value="Aceptar" ></td>
			</tr></tr></table>
		</form>-->
<br>
<!-- formulario registro -->

<form method="post" action="" >
<fieldset>
    <legend  style="font-size: 18pt"><b>Registro de Producto</b></legend>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Producto</b></label>
      <input type="text" name="realname" class="form-control" placeholder=" nombre del producto" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt;"><b>Descripcion</b></label>
      <input type="text" name="nick" class="form-control"  required placeholder="descripcion del producto"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; "><b>Existencias</b></label>
      <input type="text" name="pass" class="form-control"  placeholder="numero de producto" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Precio de Compra</b></label>
      <input type="text" name="rpass" class="form-control" required placeholder="en peso mexicano" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Precio de Venta</b></label>
      <input type="text" name="pv" class="form-control" required placeholder="en peso mexicano" />
    </div>
   
    <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>

  </fieldset>
</form>
</div>
<?php
		if(isset($_POST['submit'])){
			require("insertar.php");
		}
	?>
<!--Fin formulario registro -->

		</td>
		</tr>
		</table>
		</div></center></div></center>

	
</body>
</html>