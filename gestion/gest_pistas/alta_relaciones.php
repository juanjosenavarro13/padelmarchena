<?php
session_start();
include ("../seguridad.php");
include("../../conexion.php");
include("../includes_gestion.php");
$pag=$_SERVER['PHP_SELF'];
if ($_GET['accion']=="borrar"){
	$id_borrar= $_GET['id'];
	mysqli_query($conexion,"DELETE FROM $tabla2 WHERE id_pista='$id_borrar'") or die(mysqli_error());
	mysqli_close();
	$pagina=$_GET['pagina'];
	header ("Location: $pag");
	exit;
}
include("../../includes.php");
encabezado();
	echo "<link href='../../estilos.css' rel='stylesheet' type='text/css' />";
cabecera();
col_izda1();
enlaces_izda();
administrar();
col_izda2();
cuerpo1();

?>

<form action='alta_relaciones2.php' method='POST'>
<table border='0' id='tabla_gestion' width='400'>

<tr id='cabecera_tabla'> 
	<td colspan='2' align='center'>ALTA DE RELACIONES PISTA-BLOQUE</td>
</tr>

<tr>
	<td> PISTA: </td>
	<td> <?php generaPistas(); ?> </td>
</tr>

<tr>
	<td> BLOQUE: </td>
	<td> <?php generaBloques(); ?> </td>
</tr>

<tr>
	<td> TIPO: </td>
	<td>
		<select name="tipo">
			<option value=1> Temporal </option>
			<option value=2> Permanente </option>
            <option value=3> Clases </option>
            <option value=4> Abono </option>
		</select>
	</td>
</tr>

<tr>
	<td> D&Iacute;AS: </td>
	<td>
		<table>
			<tr>
				<td>L</td>
				<td>M</td>
				<td>X</td>
				<td>J</td>
				<td>V</td>
				<td>S</td>
				<td>D</td>
			</tr>
			<tr>
				<td><input type='checkbox' name="lunes"></td>
				<td><input type='checkbox' name="martes"></td>
				<td><input type='checkbox' name="miercoles"></td>
				<td><input type='checkbox' name="jueves"></td>
				<td><input type='checkbox' name="viernes"></td>
				<td><input type='checkbox' name="sabado"></td>
				<td><input type='checkbox' name="domingo"></td>		
			</tr>
		</table>
	</td>
</tr>

<tr>
	<td>A partir del: </td>
	<td>
		<input type='text' name='dia_desde' size='3'> /
		<input type='text' name='mes_desde' size='3'> /
		<input type='text' name='ano_desde' size='5'> <span class='nota'>(Formato 'dd/mm/aaaa')</span>
	</td>
</tr>
<tr>
	<td>Hasta el: </td>
	<td>
		<input type='text' name='dia_hasta' size='3'> /
		<input type='text' name='mes_hasta' size='3'> /
		<input type='text' name='ano_hasta' size='5'> <span class='nota'>(Formato 'dd/mm/aaaa')</span>
	</td>
</tr>

<tr>
	<td colspan="2" align="right">
		<input type="submit" value="GUARDAR" id="boton">
	</td>

</tr>	

</table>
<?php
///////////////////////////////////////		AKI TERMINA LA WEB 		/////////////////////////////

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