<?php
//session_start();
include ("../seguridad.php");
include("../../includes.php");
include("../includes_gestion.php");

encabezado();
	echo "<link href='../../estilos.css' rel='stylesheet' type='text/css' />";
cabecera();
col_izda1();
enlaces_izda();
administrar();
col_izda2();
cuerpo1();
///////////////////////////////////////		AKI COMIENZA LA WEB 		/////////////////////////////
enlaces_reservas();
include("../../conexion.php");

$usuario=$_POST['usuario'];
$pista=$_POST['pista'];
$horario=$_POST['hora'];
$dia=$_POST['dia'];
$pag=$_POST['pag'];
$fecha_seg=$_POST['fecha_seg'];
$meapunto=$_POST['meapunto'];
//echo $meapunto;
$nivel_desde=$_POST['nivel'];
$nivel_hasta=$_POST['nivel'];

$fecha=explode("-",$dia);
$fecha_esp=$fecha[2]."-".$fecha[1]."-".$fecha[0]; 



	/////////////////////  DATOS PISTA   ///////////////////////
	$ssql_pista = "SELECT * FROM `$tabla2` WHERE id_pista=$pista";
	$resultado_pista = mysql_query($ssql_pista);
	/////////////////////////////////////////////////////////////
	
	////////////////////  DATOS HORARIO  ////////////////////////
	$ssql_horario = "SELECT * FROM `$tabla3` WHERE id_horario=$horario";
	$resultado_horario = mysql_query($ssql_horario);
	/////////////////////////////////////////////////////////////
	
	$row_pista = mysql_fetch_object($resultado_pista);
	$nombre_pista=$row_pista->nombre;

	$row_horario = mysql_fetch_object($resultado_horario);
	$inicio=$row_horario->inicio;
	$fin=$row_horario->fin;
	$hora_inicio=substr($inicio,0,5);
	$hora_fin=substr($fin,0,5);;
	
//////////////////////////////				GENERA EL ULTIMO ME APUNTO       ///////////////////////////

$nreserva= mysql_query("SELECT MAX(id_meapunto) FROM $tabla8");

	while ($registro=mysql_fetch_row($nreserva)){
	       foreach($registro as $clave){ 
	       //echo $clave;
	 	}
	 }

$id_meapunto=$clave+1;

if($nivel_desde=='' OR $nivel_hasta==''){

echo "
<form action='#' method='POST'>
	<table border='2' id='reservas'>
		<tr>
			<td colspan='2' class='titulo' align='center'>SELECCIONA EL NIVEL DEL PARTIDO!!</td>
		</tr>
		<tr>
			<td align='center'>";
			
generaSelect_niveles($nivel);

echo "
			</td>
		</tr>
		</table>
		
		<table id='siguiente'>
		<tr>
			<td colspan='2' align='center'>
				<input type='submit' name='siguiente' id='boton' value='SIGUIENTE >>'>
			</td>
		</tr>
		</table>
";

echo "<input type='hidden' name='pista' value='$pista'>";
echo "<input type='hidden' name='hora' value='$horario'>";
echo "<input type='hidden' name='dia' value='$dia'>";
echo "<input type='hidden' name='fecha_seg' value='$fecha_seg'>";
echo "<input type='hidden' name='meapunto' value='$meapunto'>";
echo "</form>";

}else{

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
	if($meapunto!=''){
		echo "Ya hay un partido programado para esa hora";
	}else{
		$campos="id_meapunto,pista,horario,dia,hora_inicio,completo,nivel_desde,nivel_hasta";
		$datos="'$id_meapunto','$pista','$horario','$dia','$fecha_seg','0','$nivel_desde','$nivel_hasta'";
	
		$sentencia="INSERT INTO $tabla8 ($campos) VALUES ($datos)";
	
		$inserta=mysql_query($sentencia,$conexion);

		if($inserta==1){

			echo "<div id='mensaje_reserva'>Gracias. El buscador de partidos!! ha sido creado con &eacute;xito.<br>
			La p&iacute;sta <b>$nombre_pista</b> estar&aacute; a disposici&oacute;n de los cuatro primeros jugadores que se apunten el d&iacute;a <b>$fecha_esp</b> desde las <b>$hora_inicio</b> hasta las <b>$hora_fin</b>.<br><br>
			<form action='alta_meapunto.php' method='POST'>
			<input type='submit' name='volver' value='volver' id='boton'>
			<input type='hidden' name='seleccionado' value='$fecha[2]'>
			<input type='hidden' name='mes_actual' value='$fecha[1]'>
			<input type='hidden' name='ano_actual' value='$fecha[0]'>
			</form> 
			</div>";
		}else{
			echo "<div id='error'>No ha sido posible insertar los datos en la base de datos</div>";
			//echo $sentencia;
		}
	}

}
///////////////////////////////////////		AKI TERMINA LA WEB 		/////////////////////////////

cuerpo2();
/*
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
*/
pie();

?>