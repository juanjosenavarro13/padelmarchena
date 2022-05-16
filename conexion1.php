<?php
$servidor='localhost';
$usuario='root';
$contrasena='root';
$base='dehesa';

$tabla1='usuarios';
$tabla2='pistas';
$tabla3='horarios';
$tabla4='bloque';
$tabla5='reservas';
$tabla6='privilegios';
$tabla7='solicitud';
$tabla8='meapunto';
$tabla9='reservas_meapunto';


if($conexion=mysql_connect($servidor,$usuario,$contrasena)){
//	echo "<h2>conexión establecida con el servidor</h2><br>";
mysql_select_db($base, $conexion);
	
}else{
//	echo "<h2>no ha sido posible conectar con el servidor</h2>";
	}
	
?>