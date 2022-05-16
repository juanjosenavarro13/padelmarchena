<?php

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

echo "
	<br><br><br>
	Gracias por darte de alta en el nuevo sistema de reservas online de La Dehesa C.D.<br>
	Te hemos mandado tu contrase&ntilde;a a tu correo electr&oacute;nico<br>
	Ponla en el siguiente formulario y empieza a conocer desde ya el nuevo sistema de reservas online
	<br><br>
	
<form action='autenticacion.php' method='POST'>
<div id='autenticacion'>
<div id='titulo'>CENTRO DE RESERVAS</div>
<table border='0' name='autenticacion' id='tabla_autenticacion'>

	<tr>
		<td>NIF: </td>
		<td align='right'><input type='text' name='nif' id='campo'></td>
	</tr>
	
	<tr>
		<td>Contrase&ntilde;a: </td>
		<td align='right'><input type='password' name='pass' id='campo'></td>
	</tr>

	<tr>
		<td colspan='2' align='right'><input type='submit' name='enviar' id='boton' value='Entrar'></td>
	</tr>

</table>
</div>
</form>
<br><br>
";


$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$nif=$_POST['nif'];
$mail=$_POST['mail'];
$pass_enc=$_POST['pass_enc'];


	$campos="Pass='$pass_enc'";
	$sentencia="UPDATE $base . `$tabla11` SET $campos WHERE Email='$mail' AND Nif='$nif' ";
	$modifica=mysql_query($sentencia,$conexion);

cuerpo2();

pie();

?>