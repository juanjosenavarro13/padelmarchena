<?php
session_start();
include("includes.php");

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
?>

<form action='autenticacion.php' method='POST'>
<div id='texto_autenticacion'>
Si ya conoces el nuevo sistema...
</div>
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



<form action='actualizar.php' method='POST'>
<div id='texto_solicita'>
...y si aun no has entrado...
<!--
Tenemos un nuevo sistema para las reservas online. Desde ahora en adelante te resultar&aacute; m&aacute;s f&aacute;cil y f&aacute;pido hacer tus reservas, podr&aacute;s lanzar partirdos para que otra gente se apunte contigo. Apuntarte a otros partidos con el sistema ME APUNTO!! etc...<br>
Para acceder por primera vez al nuevo sistema solo neceistar&aacute;s 1 minuto.<br>
Introduce tu correo electr&oacute;nico y pulsa siguiente. Inmediatamente te llegar&aacute; la contrase&ntilde;a a tu boz&oacute;n de entrada
-->
</div>

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

<?php

cuerpo2();

pie();




?>