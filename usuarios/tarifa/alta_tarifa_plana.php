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

<div id="cabecera_alumnos">ALTA TARIFA PLANA</div>
<br />
<div id="tabla_alumnos">
<form action='guardar.php' method='POST'>
<table>

<tr>
<div id="nombre_alumno"> 

1&deg; Nombre: <input type='text' name='nombre' value=''  id="tarifa_nombre" placeholder="Escriba su nombre">
</div>
</tr>
<tr>
<div id="nombre_alumno"> 

2&deg; Apellido: <input type='text' name='apellido' value=''  id="tarifa_nombre" placeholder="Escriba su apellido">
</div>
</tr>
<tr>
<div id="nombre_alumno"> 

3&deg; Telefono: <input type='text' name='telefono' value=''  id="tarifa_tlfn" maxlength='9' placeholder="Escriba su tlf.">
</div>
</tr>
<tr>
<div id="nombre_alumno"> 

4&deg; Precio: <input type='text' name='precio' value=''  id="precio" maxlength='9' placeholder="...&euro; ">
</div>
</tr>

<tr>
<input type='hidden' name='mes' value='<?php echo $mes; ?>'>
<input type='submit' name='id12' value='GUARDAR' >
</tr>
<tr>
	<td>
	<br><br>&nbsp;&nbsp;<a href="tarifa_plana.php" class="button_css3" style="text-decoration:none!important">VOLVER</a>
	</td>
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