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
<table border='1' width='100%' height='100%' id='tabla_contenido_abonos'>

	<tr>
		<td>&nbsp;</td>
		<td width='800' align='center' valign='top'>
			<div id='titulo'>SOLICITUD DE ABONOS</div><br>
			<div id='texto'>
			  <p>En este apartado puedes solicitar tu reserva de abono.
Todos los abonados disponen de un partido gratis el sabado o el domingo por la tarde. </p>

<form action='abonos2.php' method='post'>
<table border='0' id='tabla_abonos'>

	<tr>
		<td>Nombre: </td>
		<td><input name="nombre" type="text" id="campo"></td>	
	</tr>
	<tr>
		<td>Email: </td>
		<td><input name="mail" type="text" id="campo"></td>
	</tr>	
	<tr>
		<td>* Dia:</td>
		<td>
			<select name="dia" id="campo">
				<option>LUNES</option>
            <option>MARTES</option>
            <option>MIERCOLES</option>
            <option>JUEVES</option>
            <option>VIERNES</option>
            <option>SABADO</option>
            <option>DOMINGO</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>* Hora: </td>
		<td>
			<select name="hora" id="campo">
            <option>9:00 a 10:30</option>
            <option>10:30 a 12:00</option>
            <option>12:00 a 13:30</option>
            <option>13:30 a 15:00</option>
            <option>15:00 a 16:30</option>
            <option>16:30 a 18:00</option>
            <option>18:00 a 19:30</option>
				<option>18:30 a 20:00</option>
            <option>19:30 a 21:00</option>
            <option>20:00 a 21:30</option>
            <option>21:00 a 22:30</option>
            <option>21:30 a 23:00</option>
          </select>
		</td>
	</tr>
	<tr>
		<td>N&uacute;mero de jugadores: </td>
		<td>
			<select name="jugadores" id="jugadores">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
		</td>
	</tr>
	<tr>
		<td colspan='2'>Nombre de los jugadores:<br>
			<textarea name="nombres" cols="70" rows="10" id="jugadores"></textarea>
		</td>
	</tr>
	<tr>
		<td colspan='2' align='center'><input type='submit' value='enviar'></td>
	</tr>
</table><br><br>
</form>
		
		</td>
		<td>&nbsp;</td>			
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