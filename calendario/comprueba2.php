<?php

include("../conexion.php");

$nick=$_POST['nick'];



$ssql="SELECT * FROM $tabla1 WHERE nick='$nick'";

//echo $ssql;

$resultado =  mysqli_query($ssql);
var_dump($resultado);



$nr =  mysqli_num_rows($resultado);



//echo $nr



if($nr==0){

	header ("Location: index.php?formulario=fcalen&nomcampo=fecha1&disponible='si'&nombre=$nick");

	exit;

}else{

	header ("Location: index.php?disponible='no'");

}





?>