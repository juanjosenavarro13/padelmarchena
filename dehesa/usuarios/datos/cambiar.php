<?php

include("../../conexion.php");
//include ("../seguridad.php");
session_start();
$id_usuario=$_SESSION['id'];
$campo=$_POST['campo'];

if($campo=='telefono'){
///////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////      CAMBIA TELEFONO     /////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

	$movil=$_POST['movil'];
	$movil_nuevo=$_POST['movil_nuevo'];

	//////////////////////////////////        	GENERA SI EL TELEFONO ES UNICO     ///////////////////////////////////

	$prueba_movil= mysql_query("SELECT COUNT(id_usuario) FROM $tabla11 WHERE telefono='$movil_nuevo'");
		while ($movil2=mysql_fetch_row($prueba_movil)){
	   	    foreach($movil2 as $numero_movil){ 
	 		}
	 	}
	 
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////

//echo "<br>numero de moviles existentes: ".$numero_movil."<br>";
	if($numero_movil>0){
			header ("Location: perfil.php?msj=3");
	}else{
		$campos="Telefono='$movil_nuevo'";

		$sentencia="UPDATE $base . `$tabla11` SET $campos WHERE Id='$id_usuario' ";
		$modifica=mysql_query($sentencia,$conexion);
		//echo $sentencia;
		header ("Location: perfil.php?msj=4");
		}


}elseif($campo=='mail'){
///////////////////////////////////////////////////////////////////////////////////
////////////////////////////////      CAMBIA MAIL     /////////////////////////////
///////////////////////////////////////////////////////////////////////////////////
	$mail=$_POST['mail'];
	$mail_nuevo=$_POST['mail_nuevo'];
	//echo $mail;
	//echo "mail nuevo: ".$mail_nuevo;


//////////////////////////////////        	GENERA SI EL MAIL ES UNICO     ///////////////////////////////////

$prueba_mail= mysql_query("SELECT COUNT(Id) FROM $tabla11 WHERE Email='$mail_nuevo'");
	while ($mail2=mysql_fetch_row($prueba_mail)){
	       foreach($mail2 as $numero_mail){ 
	 	}
	 }
	 
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

//echo "<br>numero de correos existentes: ".$numero_mail."<br>";
	if($numero_mail>0){
			header ("Location: perfil.php?msj=1");
	}else{
			$campos="Email='$mail_nuevo'";
			$sentencia="UPDATE $base . `$tabla11` SET $campos WHERE Id='$id_usuario' ";
			$modifica=mysql_query($sentencia,$conexion);
			//echo $sentencia;
			header ("Location: perfil.php?msj=2");
		}



}elseif($campo=='pass_nueva'){
/////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////      CAMBIA CONTRASEÑA     /////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////
	$pass=$_POST['pass_antigua'];
	$pass_enc=md5($pass);
	$pass_nuevo=$_POST['pass_nuevo'];
	$repetir_pass=$_POST['repetir_pass_nuevo'];

///////////////////////////////        	GENERA SI LA CONTRASEÑA ES LA MISMA     ///////////////////////////////////

$sentencia_pass="SELECT Pass FROM $tabla11 WHERE Id='$id_usuario'";
$resultado_pass= mysql_query($sentencia_pass);
$row_pass = mysql_fetch_object($resultado_pass);
$pass_bd=$row_pass->Pass;
	 
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

if($pass_enc!=$pass_bd){
	header ("Location: perfil.php?msj=5");
}elseif($pass_nuevo!=$repetir_pass){
	header ("Location: perfil.php?msj=6");
}else{
	$pass_nuevo_enc=md5($pass_nuevo);
	$campos="Pass='$pass_nuevo_enc'";
	$sentencia="UPDATE $base . `$tabla11` SET $campos WHERE Id='$id_usuario' ";
	$modifica=mysql_query($sentencia,$conexion);
	//echo $sentencia;
	header ("Location: perfil.php?msj=7");
	}
}elseif($campo=='direccion'){

/////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////      CAMBIA CONTRASEÑA     /////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////

	$direccion=$_POST['calle'];
	$poblacion=$_POST['poblacion'];
	$provincia=$_POST['provincia'];
	
	$campos="Direccion='$direccion',Poblacion='$poblacion',Provincia='$provincia'";
	$sentencia="UPDATE $base . `$tabla11` SET $campos WHERE Id='$id_usuario' ";
	$modifica=mysql_query($sentencia,$conexion);
	if($modifica==1){
	header ("Location: perfil.php?msj=8");
	}
}
?>