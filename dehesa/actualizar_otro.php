<?php
session_start();
include("includes.php");
include("conexion.php");
encabezado();
?>
	<script language="JavaScript" src="calendario/javascripts.js"></script>
<?php
cabecera();

if($_SESSION['autenticado']=='si'){

col_izda1();
enlaces_izda_portada();
administrar_portada();
col_izda2();
}
cuerpo1();

$correo=$_POST['mail'];
$nif=$_POST['nif'];
/*
if($correo==""){
?>
</head>

<html>

<table boder='2' width='100%' height='100%'>

<tr>

<td>&nbsp;</td>
<td width='700' align='center'>
<form action='olvido.php' method='post'>
	<table boder='2' id='olvido' width='400' height='200'>
		<tr>
			<td class='titulo'>Has olvidado tu contrase&ntilde;a:<hr></td>
		</tr>
		<tr>
			<td>Introduce tu email y te enviaremos por correo tu contrase&ntilde;a.</td>
		</tr>
		<tr>
			<td align='center'>E-mail: <input type='text' name='mail'></td>
		</tr>
		<tr>
			<td align='right'><input type='submit' value='enviar'></td>
		</tr>
	</table>
</form>

</td>
<td>&nbsp;</td>
</tr>


</table>
<?php
}else{
*/
/////////////////////////   GENERAR CONTRASEÑA ALEATORIA    ////////////////////////////////

$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
$cad = "";
for($i=0;$i<6;$i++) {
$cad .= substr($str,rand(0,62),1);
}

$ssql = "SELECT Id,Nombre, Apellidos FROM `$tabla11` WHERE Email='$correo' AND Nif='$nif'";
echo $ssql;
$resultado = mysql_query($ssql);
while ($registro=mysql_fetch_row($resultado)){
	$id_usuario=$registro[0];
	$nombre=$registro[1];
}

	$pass_nuevo_enc=md5($cad);
	$campos="Pass='$pass_nuevo_enc'";
	$sentencia="UPDATE $base . `$tabla11` SET $campos WHERE Id='$id_usuario' ";
//	$modifica=mysql_query($sentencia,$conexion);
echo $sentencia;
////////////////////  FUNCION MAIL    ////////////////////

$destino=$correo;
$remite="From: Pizza-House@pizza-house.es;";

$asunto="Recordatorio de contrasena PIZZA HOUSE";

$mensaje="Hola <b>".$nombre.".</b><br><br>";
$mensaje.="Sus claves de acceso han sido reestablecidas por el sistema. Ahora son:<br><br>";
$mensaje.="mail: <b>".$correo."</b><br>";
$mensaje.="contrase&ntilde;a: <b>".$cad."</b><br><br>";
$mensaje.="Puede entrar en su perfil y cambiarla y as&iacute; le resulta mas f&aacute;cil memorizarla.<br><br>";
$mensaje.="Esperamos haberle servido de ayuda";

//mail($destino, $asunto, $mensaje, 'Content-type: text/html');
echo $mensaje;
echo "Te hemos enviado por correo electronico tu nueva contrase&ntilde;a.";
//}
?>

<?php

cuerpo2();
pie();

?>