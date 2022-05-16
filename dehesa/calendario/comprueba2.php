<?php
include("../conexion.php");
$nick=$_POST['nick'];

$ssql="SELECT * FROM $tabla11 WHERE apodo='$nick'";

$resultado = mysql_query($ssql);

$nr = mysql_num_rows($resultado);

//echo $nr

if($nr==0){
	header ("Location: index.php?formulario=fcalen&nomcampo=fecha1&disponible='si'&nombre=$nick");
	exit;
}else{
	header ("Location: index.php?disponible='no'");
}


?>