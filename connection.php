<?php
$cn=mysql_connect("jnc6n3xpbgc3kek2.chr7pe7iynqr.eu-west-1.rds.amazonaws.com","exievz51r0py9g1v","rt3q65w92v53w29q")or die("Error en Conexion");
$db=mysql_select_db("lhgjmfsupyod65vz")or die("Error en Db");
return($cn);
return($db);
?>