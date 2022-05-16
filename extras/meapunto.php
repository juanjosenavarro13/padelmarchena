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
			<div id='titulo'>ME APUNTO</div><br>
			<div id='texto'>
					 <p>En este apartado puedes indicar tus horas libres para poder jugar </p>
                <p>Con este  sistema  no tienes que montar tu el partido, lo organizamos nosotros, no tienes que buscar al resto de jugadores, lo hacemos nosotros por ti.</p>
                <p>Simplemente indicanos tus dias y horas en las que puedes jugar, y nosotros te avisaremos via SMS cuando tengamos montado un partido.. </p>			  

<form action='meapunto2.php' method='post'>
<table border='0' id='tabla_abonos'>

	<tr>
		<td>Nombre: </td>
		<td><input name="nombre" type="text" id="campo">*</td>	
	</tr>
	<tr>
		<td>Email: </td>
		<td><input name="mail" type="text" id="campo">*</td>
	</tr>	
	<tr>
		<td>Tel&eacute;fono:</td>
		<td><input type='text' name='telefono'>*</td>
		</td>
	</tr>
	<tr>
		<td colspan='2' align='center'>DISPONIBILIDAD DIARIA:</td>
	</tr>
	<tr>
		<td colspan='2'>
			Lunes <input type='checkbox' name='lunes' value='lunes' CHECKED>
			Martes <input type='checkbox' name='martes' value='martes' CHECKED>
			Miercoles <input type='checkbox' name='miercoles' value='miercoles' CHECKED>
			Jueves <input type='checkbox' name='jueves' value='jueves' CHECKED>
			Viernes <input type='checkbox' name='viernes' value='viernes' CHECKED>
			S&aacute;bados <input type='checkbox' name='sabados' value='sabados' CHECKED>
		</td>
	</tr>
	<tr>
		<td colspan='2' align='center'>DISPINIBILIDAD HORARIA: </td>
	</tr>
	<tr>	
		<td>Desde: 
			<select name="hora_desde" id="campo">
            <option>9:00</option>
            <option>9:30</option>
            <option>10:00</option>
            <option>10:30</option>
            <option>11:00</option>
            <option>11:30</option>
            <option>12:00</option>
            <option>12:30</option>
            <option>13:00</option>
            <option>13:30</option>
            <option>14:00</option>
            <option>14:30</option>
            <option>15:00</option>
            <option>15:30</option>
            <option>16:00</option>
            <option>16:30</option>
            <option>17:00</option>
            <option>17:30</option>
            <option>18:00</option>
            <option>18:30</option>
            <option>19:00</option>
            <option>19:30</option>
            <option>20:00</option>
            <option>20:30</option>
            <option>21:00</option>
            <option>21:30</option>
            <option>22:00</option>
            <option>22:30</option>
          </select>
		</td>
		<td>Hasta: 
			<select name="hora_hasta" id="campo">
            <option>9:00</option>
            <option>9:30</option>
            <option>10:00</option>
            <option>10:30</option>
            <option>11:00</option>
            <option>11:30</option>
            <option>12:00</option>
            <option>12:30</option>
            <option>13:00</option>
            <option>13:30</option>
            <option>14:00</option>
            <option>14:30</option>
            <option>15:00</option>
            <option>15:30</option>
            <option>16:00</option>
            <option>16:30</option>
            <option>17:00</option>
            <option>17:30</option>
            <option>18:00</option>
            <option>18:30</option>
            <option>19:00</option>
            <option>19:30</option>
            <option>20:00</option>
            <option>20:30</option>
            <option>21:00</option>
            <option>21:30</option>
            <option>22:00</option>
            <option>22:30</option>
          </select>
		</td>
	</tr>
	<tr>
		<td colspan='2' align='center'><input type='submit' value='Enviar'></td>
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