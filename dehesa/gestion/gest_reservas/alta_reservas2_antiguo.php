<?php
session_start();
include ("../seguridad.php");
include("../../includes.php");

encabezado();
	echo "<link href='../../estilos.css' rel='stylesheet' type='text/css' />";
cabecera();
col_izda1();
enlaces_izda();
administrar();
col_izda2();
cuerpo1();
///////////////////////////////////////		AKI COMIENZA LA WEB 		/////////////////////////////

include("../../conexion.php");
include("../includes_gestion.php");
enlaces_reservas();
function generaListaUsuarios(){
/////////////////////////////////////////////////////////////
include("../../conexion.php");
$ssql = "select * from `$tabla11` ORDER BY nombre";
$resultado = mysql_query($ssql);

while ($row=mysql_fetch_object($resultado)){
	$id_usuario=$row->Id;
	$nombre=$row->Nombre;
	$apellido1=$row->Apellidos;
	$nick=$row->Apodo;
	echo "<option value='".$id_usuario."'>".$nombre." ".$apellido1." [".$nick."]</option>";
}

echo "</select>"; 

/////////////////////////////////////////////////////////////
}

$usuario1=$_POST['usuario1'];
$usuario2=$_POST['usuario2'];
$usuario3=$_POST['usuario3'];
$usuario4=$_POST['usuario4'];

$pista=$_POST['pista'];
$horario=$_POST['hora'];
$dia=$_POST['dia'];
$pag=$_POST['pag'];
$fecha_seg=$_POST['fecha_seg'];

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
	
//////////////////////////////				GENERA LA ULTIMA RESERVA       ///////////////////////////

$nreserva= mysql_query("SELECT MAX(id_reserva) FROM $tabla5");

	while ($registro=mysql_fetch_row($nreserva)){
	       foreach($registro as $clave){ 
	       //echo $clave;
	 	}
	 }

$id_reserva=$clave+1;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

if($usuario1=='' OR $usuario2=='' OR $usuario3=='' OR $usuario4==''){ 
	echo "<form action='reservas2.php' method='POST'> 
				<input type='hidden' name='hora' value='$horario'>
				<input type='hidden' name='usuario' value='$usuario'>
				<input type='hidden' name='pista' value='$pista'>
				<input type='hidden' name='dia' value='$dia'>
				<input type='hidden' name='pag' value='$pag'>
				<input type='hidden' name='fecha_seg' value='$fecha_seg'>";

//	generaUsuarios();
?>

<table border='0' id='reservas'>

<tr>
	<td colspan='2' class='titulo'>SELECCIONA LOS JUGADORES</td>
</tr>

<tr>
	<td class='subtitulo'>ID JUGADOR 1</td>
	<td>
		<input type='text' name='usuario1'> o b&uacute;scalo 
		<select name='usuario1' id='campo'>
		<option value=''>Elige el usuario</option>
	<?php generaUsuarios(); ?>
	</td>
</tr>

<tr>
	<td class='subtitulo'>ID JUGADOR 2</td>
	<td>
		<input type='text' name='usuario2'> o b&uacute;scalo
		<select name='usuario2' id='campo'>
		<option value=''>Elige el usuario</option>
	<?php generaUsuarios(); ?>
	</td>
</tr>
<tr>
	<td class='subtitulo'>ID JUGADOR 3</td>
	<td>
		<input type='text' name='usuario3'> o b&uacute;scalo
		<select name='usuario3' id='campo'>
		<option value=''>Elige el usuario</option>
	<?php generaUsuarios(); ?>
	</td>
</tr>
<tr>
	<td class='subtitulo'>ID JUGADOR 4</td>
	<td>
		<input type='text' name='usuario4'> o b&uacute;scalo
		<select name='usuario4' id='campo'>
		<option value=''>Elige el usuario</option>
	<?php generaUsuarios(); ?>
	</td>
</tr>
</table>

	
<?php	
	
	echo "<br><br>
			<input type='submit' name='siguiente' value='SIGUIENTE >>' >
			</form></div>";
}else{

//////////////////////////////		GENERA EL ULTIMO JUGADOR-RESERVA      ///////////////////////////
$njugador_reserva= mysql_query("SELECT MAX(id_jugador_reserva) FROM $tabla10");
	while ($registrojr=mysql_fetch_row($njugador_reserva)){
	       foreach($registrojr as $clavejr){ 
	       //echo $clave;
	 	}
	 }
$id_jugador_reserva1=$clavejr+1;
$id_jugador_reserva2=$clavejr+2;
$id_jugador_reserva3=$clavejr+3;
$id_jugador_reserva4=$clavejr+4;

$hoy=date('Y-m-d');

	$campos1="id_jugador_reserva,id_jugador,id_reserva,nombre_jugador,precio,socio,fecha";
	$datos1="'$id_jugador_reserva1','$usuario1','$id_reserva','$nombre_jugador1','$precio1','1','$hoy'";
	$sentencia1="INSERT INTO $tabla10 ($campos1) VALUES ($datos1)";
	$inserta1=mysql_query($sentencia1,$conexion);
	
	$base1=$precio1/1.18;
	$iva1=$precio1-$base1;
	$concepto1="Reserva de la pista $nombre_pista el dia $hoy a las $hora_inicio";
	
	$campos_temporal1="IdPuesto,IdSocio,Vendedor,FechaEmisio,Concepto,Precio,Cantidad,Total,Formapago,Base,Iva,IvaVenta,IdSocioPago";
	$datos_temporal1="'1','$cliente','1','$fecha','$concepto1','$precio1','1','$precio1','1','$base1','$iva1','18','$pago_cliente1'";
	$sentencia_temporal1="INSERT INTO $tabla12 ($campos_temporal1) VALUES ($datos_temporal1)";
//	echo $sentencia_temporal1;
	$inserta_temporal1=mysql_query($sentencia_temporal1,$conexion);


	$campos="id_reserva,usuario,pista,horario,dia,hora_inicio";
	$datos="'$id_reserva','$usuario','$pista','$horario','$dia','$fecha_seg'";
	
	$sentencia="INSERT INTO $tabla5 ($campos) VALUES ($datos)";
	

	$inserta=mysql_query($sentencia,$conexion);

		if($inserta==1){

			echo "<div id='mensaje_reserva'>Gracias. La reserva se ha realizado con &eacute;xito a nombre de <b>$nombre_usuario</b>.<br>
			La p&iacute;sta <b>$nombre_pista</b> estar&aacute; a su disposici&oacute;n el d&iacute;a <b>$fecha_esp</b> desde las <b>$hora_inicio</b> hasta las <b>$hora_fin</b>.<br><br>
			<form action='gestion_reservas.php' method='POST'>
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