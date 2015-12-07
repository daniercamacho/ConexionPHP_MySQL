<?php

include("conexion.php");

/*if(isset($_POST['nombre']) && !empty($_POST['nombre']){
	

}
*/

$conexion = mysql_connect($host,$user,$pw) or die ("Problema al conectar el host");
mysql_select_db($bd,$conexion) or die ("Problema con la bdd");

mysql_query("INSERT INTO personas (nombre) VALUES ('$_POST[nombre]')",$conexion);
echo "datos insertados correctamente";
?>