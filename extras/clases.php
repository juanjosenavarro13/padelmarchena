<?php
session_start();
include("../includes.php");

encabezado();
?>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<?php 
cabecera();
col_izda1();
enlaces_izda();
administrar();
col_izda2();
cuerpo1();
?>
	<div id='tabla_contenido_abonos'>
			<div id='titulo'>CLASES DE PADEL</div><br>
			<div id='texto'>
			Se impartir&aacute;n clases de padel para todo aquel que lo desee. Ser&aacute;n clases matinales, aun por determinar el dia y la hora. Para apuntarse rellene el formulario y pronto recibir&aacute; una respuesta. Muchas gracias.

<form action='clases2.php' method='post'>
<table border='0' id='tabla_abonos'>

	<tr>
		<td>Nombre: </td>
		<td><input name="nombre" type="text" id="campo"></td>	
	</tr>
	<tr>
		<td>Apellidos:</td>
		<td><input type='text' name='apellidos'></td>
		</td>
	</tr>
	<tr>
		<td>Tel&eacute;fono:</td>
		<td><input type='text' name='telefono'></td>
		</td>
	</tr>

	<tr>
		<td>Email: </td>
		<td><input name="mail" type="text" id="campo"></td>
	</tr>	
	<tr>
		<td colspan='2' align='center'><input type='submit' value='enviar'></td>
	</tr>
</table><br><br>
</form>
</div>
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