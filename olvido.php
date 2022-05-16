<?php
include("includes.php");
include("conexion.php");
?>

<link href="estilos.css" rel="stylesheet" type="text/css" />
<?
$correo=$_POST['mail'];

if($correo==""){
?>
</head>

<html>
<div id='olvido'>
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
			<td align='right'><input type='submit' value='Enviar'></td>
		</tr>
	</table>
</form>

</td>
<td>&nbsp;</td>
</tr>


</table>

</div>
<?php
}else{

/////////////////////////   GENERAR CONTRASEÑA ALEATORIA    ////////////////////////////////

$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
$cad = "";
for($i=0;$i<6;$i++) {
$cad .= substr($str,rand(0,62),1);
}

$ssql = "select id_usuario,nombre,nick from `$tabla1` WHERE mail='$correo'";
$resultado = mysql_query($ssql);
while ($registro=mysql_fetch_row($resultado)){
	$id_usuario=$registro[0];
	$nombre=$registro[1];
	$nick=$registro[2];
}

	$pass_nuevo_enc=md5($cad);
	$campos="pass='$pass_nuevo_enc'";
	$sentencia="UPDATE $base . `$tabla1` SET $campos WHERE id_usuario='$id_usuario' ";
	$modifica=mysql_query($sentencia,$conexion);
	
////////////////////  FUNCION MAIL    ////////////////////

$destino=$correo;
$remite="From: benjumea.jose@gmail.com;";

$asunto="Recordatorio de contrasena PADEL MARCHENA";

$mensaje="Hola <b>".$nombre.".</b><br><br>";
$mensaje.="Sus claves de acceso han sido reestablecidas por el sistema. Ahora son:<br><br>";
$mensaje.="Mail: <b>".$correo."</b><br>";
$mensaje.="Nick: <b>".$nick."</b><br>";
$mensaje.="Contrase&ntilde;a: <b>".$cad."</b><br><br>";
$mensaje.="Puede entrar en su perfil y cambiarla y as&iacute; le resulta mas f&aacute;cil memorizarla.<br><br>";
$mensaje.="Esperamos haberle servido de ayuda";

mail($destino, $asunto, $mensaje, 'Content-type: text/html');

echo "Te hemos enviado por correo electronico tu nueva contrase&ntilde;a.";
}
?>

</html>