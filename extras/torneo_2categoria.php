<?php
session_start();
include("../includes.php");
?>
	<link href="../estilos.css" rel="stylesheet" type="text/css" />
<?php
encabezado();
cabecera();
col_izda1();
enlaces_izda_portada();
administrar_portada();
col_izda2();
cuerpo1();
?>
<table border='1' id='texto_nocturno'>
	<tr>
		<td>
<span class='titulo'>TORNEO 2&ordf; CATEGOR&Iacute;A</span><br><br>
El pr&oacute;ximo s�bado 30 de julio tendr&aacute; lugar el torneo de segunda categor&iacute;a con parejas masculinas, femeninas y mixtas. <br><br>Las dos mejores parejas pasar&aacute;n al torneo de primera categor�a que tendr&aacute; lugar el domingo d&iacute;a 24 de julio.
<br><br>

APUNTATE YA!!<br><br>

<form action='torneo_2categoria2.php' method='POST'>

<table border='2' id='formulario'>
	<tr>
		<td colspan='3' class='titulo'>TORNEO 2&ordf; CATEGORIA</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td class='subtitulo'>JUGADOR1</td>
		<td class='subtitulo'>JUGADOR2</td>
	</tr>
	<tr>
		<td>Nombre:</td>
		<td align='center'><input type='text' name='nombre1'> *</td>
		<td align='center'><input type='text' name='nombre2'> *</td>
	</tr>
	<tr>
		<td>Apellido:</td>
		<td align='center'><input type='text' name='apellidos1'> *</td>
		<td align='center'><input type='text' name='apellidos2'> *</td>
	</tr>
	<tr>
		<td>Tel&eacute;fono:</td>
		<td align='center'><input type='text' name='telefono1'> *</td>
		<td align='center'><input type='text' name='telefono2'> *</td>
	</tr>
	<tr>
		<td>Email:</td>
		<td align='center'><input type='text' name='email1'> *</td>
		<td align='center'><input type='text' name='email2'>&nbsp;&nbsp;</td>
	</tr>
	<tr>
		<td colspan='3' align='right' class='abajo'>
			<input type='submit' name='enviar' value='Enviar inscripci&oacute;n' class='boton'>
		</td>
	</tr>
</table>

</form>

		</td>
	</tr>
</table>


<?php

cuerpo2();
col_derecha1();
eventos1();
eventos2();
saldo1();
saldo2();
torneos1();
torneos2();
actividades1();
actividades2();
col_derecha2();
pie();

?>