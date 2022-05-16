<?php
$servidor='db76.1and1.es';
$usuario='dbo361555354';
$contrasena='canal54';
$base='db361555354';
$tabla1='usuarios';
$tabla2='pistas';
$tabla3='horarios';
$tabla4='bloque';
$tabla5='reservas';


if($conexion=mysql_connect($servidor,$usuario,$contrasena)){
//	echo "<h2>conexión establecida con el servidor</h2><br>";
mysql_select_db($base, $conexion);
	
}else{
//	echo "<h2>no ha sido posible conectar con el servidor</h2>";
	}
	
?>