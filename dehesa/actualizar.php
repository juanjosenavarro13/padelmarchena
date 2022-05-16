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

$nif=$_POST['nif'];
$mail=$_POST['mail'];

$qr = "SELECT Id, Pass, Nombre, Apellidos, Email, Nif ";
$qr .= "FROM $tabla11 WHERE Email = '" . $mail;
$qr .= "' AND Nif = '" . $nif . "' AND Historico = '0'";

$rs = mysql_query($qr);
$row = mysql_fetch_object($rs);
//verificando si hay un usuario con ese password mediante numrows
$nr = mysql_num_rows($rs);

$pass=$row->Pass;

if($nr == 1){
	if($pass==''){
	echo "
		<br><br>
		Hola <b>$row->Nombre</b>, <br><br>
		Parece ser que aun no has disfrutado del nuevo sistema de reservas online.<br>
		Pulsa el bot&oacute;n siguiente y te mandaremos a tu correo electr&oacute;nico tus datos de acceso.<br><br>
		Muchas gracias.
		<br><br>
		<form action='http://www.padelmarchena.es/dehesa/actualizar_dehesa.php' method='POST'>
			<input type='hidden' name='nombre' value='$row->Nombre'>
			<input type='hidden' name='apellidos' value='$row->Apellidos'>
			<input type='hidden' name='nif' value='$row->Nif'>
			<input type='hidden' name='mail' value='$row->Email'>
			<input type='submit' name='enviar' value='Siguiente >>'>
		</form>
		<br><br>
	";
	}else{
	echo "
		<br><br>
		El usuario con NIF <b>$row->Nif</b> ya ha sido dado de alta en el sistema y se le ha enviado una contrase&ntilde;a de acceso<br>
		Si desea que se la volvamos a enviar pulsa siguiente.
		<br><br>
		<form action='http://www.padelmarchena.es/dehesa/actualizar_dehesa.php' method='POST'>
			<input type='hidden' name='nombre' value='$row->Nombre'>
			<input type='hidden' name='apellidos' value='$row->Apellidos'>
			<input type='hidden' name='nif' value='$row->Nif'>
			<input type='hidden' name='mail' value='$row->Email'>
			<input type='submit' name='enviar' value='Siguiente >>'>
		</form>
		<br><br>
	";
	}
}else{
	echo "
	<br><br>	
	No existe ning&uacute;n usuario con esos datos<br>
	Vuelve a introducir los datos correctamente.
	<form action='actualizar.php' method='POST'>
	
<div id='solicita'>
<div id='titulo'>SOLICITA TU NUEVA CONTRASE&Ntilde;A</div>
<table border='0' name='autenticacion' id='tabla_autenticacion'>
	<tr>
		<td>NIF: </td>
		<td align='right'><input type='text' name='nif' id='campo'></td>
	</tr>
	<tr>
		<td>Correo electr&oacute;nico: </td>
		<td align='right'><input type='text' name='mail' id='campo'></td>
	</tr>
	<tr>
		<td colspan='2' align='right'><input type='submit' name='enviar' id='boton' value='Entrar'></td>
	</tr>

</table>
</div>
</form>
<br><br>
	";
	}
?>





<?php

cuerpo2();

pie();




?>