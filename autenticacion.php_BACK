<?php
session_start();
//Conectando a base de datos
	include("conexion.php"); //Nos conectamos a la base de datos
//$con = mysql_connect("localhost", "root", "root")
//or die("<h3>No se ha podido establecer conexión con el servidor.</h3>");

//mysql_select_db("$base") or die("<h3>La base de datos no se ha encontrado</h3>");
//generando la consulta sobre el usuario y su contrasena

$nick=$_POST['nick'];
$pass=$_POST['pass'];
$pass_enc=md5($pass);

$qr = "SELECT id_usuario, nick, pass, nombre, apellido1, privilegios ";
$qr .= "FROM $tabla1 WHERE nick = '" . $nick;
$qr .= "' AND pass = '" . $pass_enc . "'";
//ejecutando la consulta
$rs = mysql_query($qr);
$row = mysql_fetch_object($rs);
//verificando si hay un usuario con ese password mediante numrows
$nr = mysql_num_rows($rs);

if($nr == 1){
//usuario y contraseña válidos
//se define una sesion y se guarda el dato session_start();
$_SESSION["autenticado"] = "si"; 
$_SESSION["nombre"]=$row->nombre;
$_SESSION["apellido1"]=$row->apellido1;
$_SESSION["nombreusr"] = $row->nombre . " " . $row->apellido1;
$_SESSION["nick"]=$row->nick;
$_SESSION["privilegios"]=$row->privilegios;
$_SESSION["id"]=$row->id_usuario;
header ("Location: usuarios/reservas/reservas.php");
/* 
	if($_SESSION["privilegios"]=="1"){
	header ("Location: reservas.php");
	}elseif($_SESSION['privilegios']=="0"){
		header ("Location: reservas.php");
	}
*/
}else{
	header ("Location: index.php?error=1");
}
?>
