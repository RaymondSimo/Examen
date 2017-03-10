                      <?php
include('register.php');
if (isset($_POST['realname']) and !empty($_POST['realname']) and
isset($_POST['nick']) and !empty($_POST['nick']) and
isset($_POST['nack']) and !empty($_POST['nack']) and
isset($_POST['neck']) and !empty($_POST['neck']) and
isset($_POST['pv']) and !empty($_POST['pv'])) {

$con=mysqli_connect($host,$user,$pw)or die("Problemas al conectar");
mysqli_select_db($con, $db)or die("Problemas al conectar la bd");

mysqli_query($con, "INSERT INTO productos (producto,descripcion,existencias,precio_compra,precio_venta) VALUES ('$_POST[realname]','$_POST[nick]','$_POST[nack]','$_POST[neck]','$_POST[pv]')");
echo "datos insertados";
}else {
  echo "Problemas al insertar datos";
}
