<?php
//Inicio la sesión
session_start();
//COMPRUEBA QUE EL USUARIO ESTA AUTENTICADO
	$f = explode("/", $_SERVER['PHP_SELF']);
	$directorio=$f[count($f)-2];
//echo $directorio;
//echo $_SESSION['privilegios'];
if ($_SESSION["privilegios"] == "1" OR $_SESSION["privilegios"] == "2") {

	if($directorio=='gest_usuarios' AND $_SESSION['privilegios']=='2'){
	header("Location: ../../index.php?error='3'");
	}elseif($directorio=='gest_pistas' AND $_SESSION['privilegios']!='1'){
	header("Location: ../../index.php?error='3'");
	}elseif($directorio=='gest_solicitud' AND $_SESSION['privilegios']!='1'){
	header("Location: ../../index.php?error='3'");
	}
}else{
header("Location: ../../index.php?error='3'");
//salimos de este script
exit();
}?>