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
$id_usuario=$_POST['id_usuario'];
/*-------------------------------- SELECIONA EL USUARIO --------------------------------*/
if ($id_usuario!=""){
$ssql_usuario = "SELECT nombre, apellido, telefono, precio, fecha FROM `$tabla41` WHERE id_usuario=$id_usuario";
$resultado_usuario = mysql_query($ssql_usuario);
$row_usuario = mysql_fetch_object($resultado_usuario);
}
?>

<div id="cabecera_alumnos">ALTA CLASES</div>
<br />
<div id="tabla_bono">
<form action='guardar.php' method='POST'>
<table>

<tr>
<div id="nombre_alumno"> 

1&deg; Nombre: <input type='text' name='nombre' value='<?php echo $row_usuario->nombre ?>'  id="tarifa_nombre" placeholder="Escriba su nombre">
</div>
</tr>
<tr>
<div id="nombre_alumno"> 

2&deg; Apellido: <input type='text' name='apellido' value='<?php echo $row_usuario->apellido ?>'  id="tarifa_nombre" placeholder="Escriba su apellido">
</div>
</tr>
<tr>
<div id="nombre_alumno"> 

3&deg; Telefono: <input type='text' name='telefono' value='<?php echo $row_usuario->telefono ?>'  id="tarifa_tlfn" maxlength='9' placeholder="Escriba su tlf.">
</div>

</tr>


<tr>
<input type='hidden' name='mes' value='<?php echo $mes; ?>'>
<br />
	<? if ($id_usuario!=""){ ?>
    <input type='hidden' name='id_usuario' value='<?php echo $id_usuario; ?>'>
    <input type='submit' name='actualizar' value='ACTUALIZAR' class="button_css3">
    <? }else{ ?>
    
<input type='submit' name='id12' value='GUARDAR' class="button_css3">
<? } ?>
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