<?php
include ("../../seguridad.php");
include("../includes_gestion.php");
include("../../conexion.php");
session_start();
if ($_GET['accion']=="apuntar"){
	apuntar();
	$meapunto=$_GET['id'];
}

if ($_GET['accion']=="anular"){
	$id_anular= $_GET['id'];
	/////////////////////////////		GENERA SI EL JUGADOR ES EL MISMO		///////////////////////////////
	$ssql_comprueba_jugador="SELECT id_cliente FROM $tabla9 WHERE id_cliente_meapunto='$id_anular'";
	$resultado_comprueba_jugador=mysql_query($ssql_comprueba_jugador);
	$row_comprueba_jugador=mysql_fetch_object($resultado_comprueba_jugador);
	$id_jugador_seguridad=$row_comprueba_jugador->id_cliente;
	//echo $ssql_comprueba_jugador;
	if($id_jugador_seguridad==$_SESSION['id']){	
	$sentencia_borrar="DELETE FROM $tabla9 WHERE id_cliente_meapunto='$id_anular'";
	mysql_query($sentencia_borrar) or die(mysql_error());
	mysql_close();
	}

	header ("Location: reservas.php");
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
enlaces_reservas();
///////////////////////////////////////		AKI COMIENZA LA WEB 		/////////////////////////////

$usuario=$_POST['usuario'];
$pista=$_POST['pista'];
$horario=$_POST['hora'];
$dia=$_POST['dia'];
$pag=$_POST['pag'];
$fecha_seg=$_POST['fecha_seg'];
$meapunto=$_POST['meapunto'];
$fecha=explode("-",$dia);
$fecha_esp=$fecha[2]."-".$fecha[1]."-".$fecha[0]; 

	/////////////////////  DATOS PISTA   ///////////////////////
	$ssql_pista = "SELECT * FROM `$tabla2` WHERE id_pista=$pista";
	$resultado_pista = mysql_query($ssql_pista);
	/////////////////////////////////////////////////////////////
	
	////////////////////  DATOS CLIENTE  ////////////////////////
//	$ssql_usuario = "SELECT * FROM `$tabla1` WHERE id_usuario=$usuario";
//	$resultado_usuario = mysql_query($ssql_usuario);
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

//////////////////////////////				SI EN ESE HORARIO HAY ME APUNTO!!       ///////////////////////////

if($meapunto!=''){
//	echo $meapunto;
tabla_apuntados2($meapunto);

	echo "<br><br><hr><br>";
	echo "<form action='reservas2.php' method='POST'>";
	echo "<input type='submit' name='hora_actual' value='Tambi&eacute;n puedes reservar la pista completa' id='reservar_completa'>";
	echo "<input type='hidden' name='hora' value='$horario'>";
	echo "<input type='hidden' name='usuario' value='$usuario'>";
	echo "<input type='hidden' name='pista' value='$pista'>";
	echo "<input type='hidden' name='dia' value='$dia'>";
	echo "<input type='hidden' name='pag' value='$pag'>";
	echo "<input type='hidden' name='fecha_seg' value='$fecha_seg'>";
	echo "</form>";
}else{


//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//tabla_reservas();
?>

<br>
<a target="_blank" onClick="window.open(this.href, this.target, 'width=650,height=550'); return false;" style="text-decoration: none" href="usuarios.php">encuentra a otros usuarios</a>
<?php
alta_reserva2();

echo "<br><hr>";
if($_POST['tipo_reserva']!='4jugadores'){
	echo "<form action='alta_reservas3.php' method='POST'>";
	echo "<div id='mensaje_reserva'>Tambi&eacute;n puedes reservar la pista completa para un usuario introduciendo su ID.<br>
	<br>ID del cliente: <input type='text' name='usuario'>
	<br><br>";

	echo "<input type='hidden' name='hora' value='$horario'>";
	echo "<input type='hidden' name='pista' value='$pista'>";
	echo "<input type='hidden' name='dia' value='$dia'>";
	echo "<input type='hidden' name='pag' value='$pag'>";
	echo "<input type='hidden' name='fecha_seg' value='$fecha_seg'>";
	echo "<input type='hidden' name='confirmado' value='si'>";
	echo "<div id='siguiente'>";
	echo "<input type='submit' name='confirmar' value='Reservar la pista completa' id='boton'>";
	echo "</div>";
	echo "</form>";
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