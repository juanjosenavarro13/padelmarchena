<?php
session_start();
include("../../conexion.php");
include("../../seguridad.php");
include("../../includes.php");

encabezado();
	echo "<link href='../../estilos.css' rel='stylesheet' type='text/css' />";
cabecera();
col_izda1();
enlaces_izda();
administrar();
col_izda2();
cuerpo1();
$mes=date(m);
///////////////////////////////////////		AKI COMIENZA LA WEB 		/////////////////////////////
?>

<div id="cabecera_alumnos">ALTA ABONOS</div>
<br />
<div id="tabla_abono" align="center">
<form action='guardar.php' method='POST'>
<table align="center">

<tr>
<div id="nombre_alumno"> 

1&deg D&Iacute;A:  <select name="dia" style="width:130px" >
            <option value="LUNES" >LUNES</option>
			<option value="MARTES" >MARTES</option>
			<option value="MIERCOLES">MIERCOLES</option>
            <option value="JUEVES">JUEVES</option>
			<option value="VIERNES">VIERNES</option>
			<option value="SABADO">SABADO</option>
            <option value="DOMINGO">DOMINGO</option>
		</select>
</div>
</tr>
<tr>
<div id="nombre_alumno"> 

2&deg; HORARIO: <select name="horario" style="width:60px" >
            <option value="09:30" >9:30</option>
			<option value="10:00" >10:00</option>
            <option value="10:30" >10:30</option>
            <option value="11:00" >11:00</option>
			<option value="12:00">12:00</option>
            <option value="12:30">12:30</option>
            <option value="13:00">13:00</option>
            <option value="16:30">16:30</option>
            <option value="17:00">17:00</option>
            <option value="17:30">17:30</option>
			<option value="18:00">18:00</option>
            <option value="18:30">18:30</option>
            <option value="19:00">19:00</option>
			<option value="19:30">19:30</option>
            <option value="20:00">20:00</option>
            <option value="20:30">20:30</option>
            <option value="21:00">21:00</option>
            <option value="21:30">21:30</option>
		</select>
</div>
</tr>
<tr>
<div id="nombre_alumno"> 

1&deg; NOMBRE: <input type='text' name='nombre1' value=''  id="nombre" maxlength='60' placeholder="Escriba su nombre">
<input type='text' name='precio1' value=''  id="precio_abono" maxlength='3' placeholder="...&euro;">
</div>
</tr>
<tr>
<div id="nombre_alumno"> 

2&deg; NOMBRE: <input type='text' name='nombre2' value=''  id="nombre" maxlength='60' placeholder="Escriba su nombre">
<input type='text' name='precio2' value=''  id="precio_abono" maxlength='3' placeholder="...&euro;">
</div>
</tr>
<tr>
<div id="nombre_alumno"> 

3&deg; NOMBRE: <input type='text' name='nombre3' value=''  id="nombre" maxlength='60' placeholder="Escriba su nombre">
<input type='text' name='precio3' value=''  id="precio_abono" maxlength='3' placeholder="...&euro;">
</div>
</tr>
<tr>
<div id="nombre_alumno"> 

4&deg; NOMBRE: <input type='text' name='nombre4' value=''  id="nombre" maxlength='60' placeholder="Escriba su nombre">
<input type='text' name='precio4' value=''  id="precio_abono" maxlength='3' placeholder="...&euro;">
</div>
</tr>

<tr>
<br />
<input type='hidden' name='mes' value='<?php echo $mes; ?>'>
<input type='submit' name='id12' value='GUARDAR' >
</tr>
    
</table>
 <br />
</form>
 <br />
    
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